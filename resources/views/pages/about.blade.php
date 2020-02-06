@extends('layouts.main-layout')

@section('content')
  <section id="about" class="pb-5">
    <div class="container text-center">
        <!-- Judul -->
        <div id="judul">
            <div class="h-centered">
                <h1 class="h-centered"><span class="text-coder">Tentang</span> <span class="text-dark">Kami</span>
                </h1>
                <img src="{{ asset('images/devider-center.png') }}" alt="------" class="devider">
            </div>
        </div>
        <!-- Judul END -->
    </div>

    <div class="col-md-12">
      <div class="row">
        <div class="col-md-6">
            <div id="carouselExampleIndicators" class="carousel slide mx-auto" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('images/tentang_1.jpg') }}" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/tentang_2.jpg') }}" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/tentang_3.jpg') }}" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            {{-- <div class="slideshow-container">
                <div class="mySlides fade">
                  <img src="{{ asset('images/tentang_1.jpg') }}" style="width:100%">
                </div>
                
                <div class="mySlides fade">
                  <img src="{{ asset('images/tentang_2.jpg') }}" style="width:100%">
                </div>
                
                <div class="mySlides fade">
                  <img src="{{ asset('images/tentang_3.jpg') }}" style="width:100%">
                </div>
                
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                <br>
                    
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
            </div> --}}
        </div>
        <div class="col-md-6 grid-item tentang pr-5">
            <p>Coder Institute HMIF FT-UH merupakan Unit Kegiatan Mahasiswa bersifat semi-otonom yang berada di bawah naungan Himpunan Mahasiswa Informatika Universitas Hasanuddin. <br>Coder Institute HMIF FT-UH berfungsi sebagai wadah Mahasiswa Departemen Teknik Informatika Fakultas Teknik Universitas Hasanuddin yang bergerak dalam penalaran, keilmuan, minat, kegemaran, dan profesionalisme pada bidang pemgrograman.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- Divisi -->
  <section class="bg-light" id="divisi">
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
      <div class="row">
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
    </div>
  </section>
  <!-- Divisi END -->

  <!-- visi -->
    <section id="visi">
        <div class="container">
            <!-- Judul -->
            <section id="judul">
                <div class="h-centered">
                    <h1 class="h-centered"><span class="text-coder">Visi</span> <span class="text-white">Kami</span>
                    </h1>
                    <img src="{{ asset('images/devider-center-dark.png') }}" alt="------" class="devider">
                </div>
            </section>
            <p>Menjadi wadah kolaborasi dan pendidikan yang mampu melahirkan <span class="weight-semibold">programmer kelas dunia</span></p>
            <!-- Judul END -->
        </div>
    </section>
  <!-- end visi -->


  <section id="tim" class="pb-5">
    <div class="container">
        <!-- Judul -->
        <section id="judul">
            <div class="h-centered">
                <h1 class="h-centered"><span class="text-coder">Pengurus</span> <span class="text-dark">Inti</span>
                </h1>
                <img src="{{ asset('images/devider-center.png') }}" alt="------" class="devider">
            </div>
        </section>
        <!-- Judul END -->
    </div>

    <div class="pengurus col-md-12">
        <div class="container">
            <div class="row">
              <div class="text-center mx-auto">
                <img src="images/user.png" alt="">
                <p class="text-coder weight-medium">M. Zul Fahmi Sadrah</p>
                <h3>Ketua</h3>
              </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="images/user.png" alt="">
                    <p class="text-coder weight-medium">Amiruddin</p>
                    <h3>Sekretaris</h3>
                </div>
                <div class="col-md-6 text-center">
                    <img src="images/user.png" alt="">
                    <p class="text-coder weight-medium">Giyani Rayani</p>
                    <h3>Bendahara</h3>
                </div>
            </div>
            <div class="row text-center">
              <div class="col-md-3">
                  <img src="images/user.png" alt="">
                  <p class="text-coder weight-medium">Fitriani Nasir</p>
                  <h3>Ketua Divisi Website</h3>
              </div>
              <div class="col-md-3">
                  <img src="images/user.png" alt="">
                  <p class="text-coder weight-medium">Glenn Claudio I. P.</p>
                  <h3>Ketua Divisi Mobile</h3>
              </div>
              <div class="col-md-3">
                  <img src="images/user.png" alt="">
                  <p class="text-coder weight-medium">Eugenius Wahyudiarto</p>
                  <h3>Ketua Divisi IoT</h3>
              </div>
              <div class="col-md-3">
                  <img src="images/user.png" alt="">
                  <p class="text-coder weight-medium">Suci Amaliyah M.</p>
                  <h3>Ketua Divisi Game</h3>
              </div>
            </div>
        </div>
    </div>
  </section>

  <script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
  </script>
@endsection