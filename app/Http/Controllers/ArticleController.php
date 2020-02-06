<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Image;
use File;
use Carbon\Carbon;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin.articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articlesform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|max:128',
            'category'=>'required',
            'content'=>'required',
            'image'=>'required|mimes:jpeg,png,jpg|max:2048'
        ]);

        $article = new Article;
        $article->title = $request->title;
        $article->category = $request->category;
        $article->content = $request->content;
        $article->image = $request->image;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('uploads/article image', $filename);
            $article->image =$filename;
        }else{
            return $request;
            $article->image = '';
        }
        
        $article->save();
        // Article::create($request->all());
        return redirect('admin/articles')->with('status','Data Telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admin.updatearticlesform', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //Student::where('id', $student->id)->update([
        //     'nim'=> $request->nim,
        //     'nama'=> $request->nama,
        //     'email'=> $request->email,
        //     'tempat_lahir'=> $request->tempat_lahir,
        //     'tanggal_lahir'=> $request->tanggal_lahir,
        // ]);
        // return redirect('/')->with('status','Data Telah diubah');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('uploads/article image', $filename);
            $article->image =$filename;
        }else{
            return $request;
            $article->image = '';
        }

        Article::where('id', $article->id)->update([
            'title' => $request->title,
            'category' => $request->category,
            'content' => $request->content,
            'image' => $request->image,
        ]);
        return redirect('admin/articles')->with('status','Data Telah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $image_path = "uploads/article image/".$article->image;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        Article::destroy($article->id);
        return redirect('admin/articles')->with('status','Data Telah dihapus');
    }

    public function blog(){
        // $articles = Article::all()->sortByDesc;
        $title = 'Coder Institute | Blog';
        $articles = Article::orderBy('id', 'desc')->paginate(2);
        $article_count = Article::count();
        return view('pages.blog', compact('articles', 'article_count'))->with('title', $title);
    }

    
}
