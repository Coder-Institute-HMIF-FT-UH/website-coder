@extends('layouts.main-layout')

@section('content')
  <!-- Blog -->
  <section id="article">
    <div class="container">
      <h1><span class="text-dark">Postingan</span> <span class="text-coder">Kami</span></h1>
      <img src="images/devider-left.png" alt="------" class="devider">
      <div class= "post grid">
        @foreach ($articles as $data)
        <div class="post-content">
        <a href="/blog/{{$data->id}}"><img src="/uploads/article image/{{$data->image}}" alt=""></a>
        <h2 class="weight-semibold"><a href="/blog/{{$data->id}}">{{$data->title}}</a></h2>
        <div class="post-info">{{$data->created_at->format('d M Y')}} | {{$data->category}}</div>
        </div>
        @endforeach
      </div>
      <!--Pagination Start-->
      <div class="horizontal-links">
        {{$articles->links()}}
      </div>
      {{-- <section class="pagination">
        <div class="container">
          
          <ul class="horizontal-links">
            @if ($articles->onFirstPage())
            <li class="previous"><a disabled href="#">Previous</a></li>
            @else
            <li class="previous"><a href="{{ $articles->previousPageUrl() }}" rel="prev">Previous</a></li>
            @endif

            <li><a href="#" class="page page-selected">1</a></li>
            <li><a href="#" class="page">2</a></li>
            <li><a href="#" >3</a></li>
            <li><a href="#" >4</a></li>
            <li><a href="#" >5</a></li>
            <li><a href="#" class="text-coder">Next</a></li>
            {{$articles->links()}}
          </ul>
        </div>
      </section> --}}
      <!--Pagination END-->
    </div>
  </section>
  <!-- Blog END -->
@endsection