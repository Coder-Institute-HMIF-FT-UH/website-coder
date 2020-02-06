<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class PagesController extends Controller
{
    public function index(){
        $title = 'Coder Institute | Home';
        $articles = Article::orderBy('id', 'desc')->paginate(2);
        return view('pages.index', compact('articles'))->with('title', $title);
    }
    public function about(){
        $title = 'Coder Institute | About';
        return view('pages.about')->with('title', $title);
    }
    // public function blog(){
    //     $title = 'Coder Institute | Blog';
    //     $articles = Article::all();
    //     return view('pages.blog', compact(Article))->with('title', $title);
    // }
    public function artikel(Article $article){
        $title = $article->title;
        $articles = Article::orderBy('id', 'desc')->paginate(2);
        return view('pages.artikel', compact('article', 'articles'))->with('title', $title);
    }
    public function contact(){
        $title = 'Coder Institute | Contact';
        return view('pages.contact')->with('title', $title);
    }

    // Admin Stuff
    public function login(){
        return view('admin.login');
    }
    public function dashboardIndex(){
        return view('admin.index');
    }
    public function dashboardPosts(){
        return view('admin.posts');
    }
}
