@extends('layouts.main-layout')

@section('content')
  <!-- Hero -->
  <section id="hero">
    <div class="wrap h-centered v-centered">
      <h1>Coder Institute</h1>
      <img src="{{ asset('images/divider-main.png') }}" alt="------" class="devider">
      <h2><span class="text-coder weight-semibold">Unit Kegiatan Mahasiswa</span><br>Himpunan Mahasiswa Informatika<br> Fakultas Teknik Universitas Hasanuddin</h2>
      <a href="#about"><img src="{{ asset('images/scroll.png') }}" alt="v" class="scroll"></a>
    </div>
  </section>
  <!-- Hero END -->

  <!-- Intro -->
  <section id="intro" class="anchor">
    <div class="container text-center">
        <a name="about">&nbsp;</a>
          <h1 class="h-centered"><span class="text-coder">Tentang</span> <span class="text-dark">Kami</span></h1>
          <img src="{{ asset('images/devider-center.png') }}" alt="------" class="devider mx-auto center-block">
          <p class="h-centered">Coder Institute HMIF FT-UH merupakan Unit Kegiatan Mahasiswa bersifat semi-otonom yang mewadahi minat dan bakat Mahasiswa Departemen Teknik Informatika Universitas Hasanuddin pada bidang pemrograman.</p>
          <a href="/about" class="text-coder">Baca Selengkapnya</a>
    </div>
    
  </section>
  <!-- Intro END -->

  <!-- Services -->
  <section class="bg-light" id="services">
    <div class="container text-center">
      <h1 class="h-centered"><span class="text-dark">Divisi</span> <span class="text-coder">Kami</span></h1>
      <img src="{{ asset('images/devider-center.png') }}" alt="------" class="devider">
    </div>  
    <div class="col-md-12 text-center list-margin">
      <div class="row row-list-margin-bottom">
        <div class="col-md-6">
          <div class="list-content leftitem">
            <img src="{{ asset('images/web.png') }}" alt="" class="list-content-images">
            <h2 class="weight-semibold list-content-header">Divisi Website</h2>
            <p>Mempelajari tentang bagaimana membangun sebuah website dari sisi front-end maupun back-end.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="list-content rightitem">
            <img src="{{ asset('images/mobile.png') }}" alt="" class="mobile-image">
            <h2 class="weight-semibold list-content-header">Divisi Mobile</h2>
            <p>Mempelajari tentang pengembangan aplikasi pada perangkat smartphone berbasis Android.</p>
          </div>
        </div>
      </div>
      <div class="row row-list-margin-bottom">
        <div class="col-md-6">
          <div class="list-content leftitem">
            <img src="{{ asset('images/iot.png') }}" alt="" class="list-content-images">
            <h2 class="weight-semibold list-content-header">Divisi IoT</h2>
            <p>Mempelajari tentang pembuatan alat yang dapat terkoneksi dan berinteraksi dengan benda lainnya.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="list-content rightitem">
            <img src="{{ asset('images/game.png') }}" alt="" class="list-content-images">
            <h2 class="weight-semibold list-content-header">Divisi Game</h2>
            <p>Mempelajari tentang bagaimana cara membuat game mulai dari dasar sampai proses release.</p>
          </div>
        </div>
      </div>
      <a href="/contact" class="button mt-3">Hubungi Kami</a>
    </div>
    
  </section>
  <!-- Services END -->

  <!-- Blog -->
  <section id="blog">
    <div class="container">
      <h1><span class="text-dark">Info</span> <span class="text-coder">Terkini</span></h1>
      <img src="{{ asset('images/devider-left.png') }}" alt="------" class="devider">
      <div class= "post grid">
        @foreach ($articles as $data)
        <div class="post-content">
          <a href="/blog/judul-dari-artikel-disini"><img src="/uploads/article image/{{$data->image}}" alt=""></a>
          <h2 class="weight-semibold"><a href="/blog/judul-dari-artikel-disini">{{$data->title}}</a></h2>
          <div class="post-info">{{$data->created_at->format('d M Y')}} .|. {{$data->category}}</div>
        </div>
        @endforeach
      </div>
      <a href="/blog" class="text-coder blog-link weight-medium">Lihat Semua Postingan</a>
    </div>
  </section>
  <!-- Blog END -->
@endsection