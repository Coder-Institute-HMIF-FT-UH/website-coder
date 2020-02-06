@extends('layouts.main-layout')

@section('content')
  <section id="artikel">
    <div class="wrap h-centered">
    <h1 class="text-dark">{{$article->title}}</h1>
      <p class="post-info">{{$article->created_at->format('d M Y')}} | {{$article->category}}</p>
      <div class="isi">
        <img src="/uploads/article image/{{$article->image}}" alt="">
        {!!$article->content!!}
      </div>
    </div>
  </section>

  <section id="other-post">
    <div class="wrap">
      <h1 class="weight-bold text-dark">Artikel Lainnya</h1>
      <div class= "post grid">
          @foreach ($articles as $data)
          <div class="post-content">
            <a href="/blog/judul-dari-artikel-disini"><img src="/uploads/article image/{{$data->image}}" alt=""></a>
            <h2 class="weight-semibold"><a href="/blog/judul-dari-artikel-disini">{{$data->title}}</a></h2>
            <div class="post-info">{{$data->created_at->format('d M Y')}} | {{$data->category}}</div>
          </div>
          @endforeach
      </div>
    </div>
  </section>
@endsection