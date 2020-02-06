<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSS reset -->
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- CSS pages -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style-landing.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style-about.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style-contact.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style-blog.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style-artikel.css') }}">
  <!-- Font yang digunakan -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <title>{{ $title }}</title>
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg fixed-top bg-white pt-2">
      <a class="navbar-brand py-3" href="/"><img src="{{ asset('images/coder_logo_nama.png') }}" alt="Logo Coder Institute" class="site-logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul id="navitems" class="navbar-nav ml-auto">
            <li class="nav-item"><a href="/" class="weight-medium {{ Request::is('/') ? 'page-selected' : '' }}">Home</a></li>
            <li class="nav-item"><a href="/about" class="weight-medium {{ Request::is('about') ? 'page-selected' : '' }}">About Us</a></li>
            <li class="nav-item"><a href="/blog" class="weight-medium {{ Request::is('blog*') ? 'page-selected' : '' }}">Post</a></li>
            <li class="nav-item"><a href="/contact" class="weight-medium {{ Request::is('contact') ? 'page-selected' : '' }}">Contact</a></li>
          </ul>
      </div>
  </nav>
  <!-- Navigation END -->

  @yield('content')

  <!-- Footer -->
  <footer id="footer">
    <div class="container">
      <p class="text-dark-mode weight-bold">Follow Us</p>
      <ul class="horizontal-links">
        <li>
          <a href="https://www.instagram.com/coderinstitute/" class="text-dark-mode" target="_blank">
            <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="logo">Instagram
          </a>
        </li>
        <li>
          <a href="https://github.com/coder-institute" class="text-dark-mode" target="_blank">
            <img src="{{ asset('images/github.png') }}" alt="Youtube" class="logo">Github
          </a>
        </li>
        {{-- <li>
            <a href="#" class="text-dark-mode" target="_blank">
              <img src="{{ asset('images/gmail.png') }}" alt="Youtube" class="logo">coderinstitute.uh@gmail.com
            </a>
          </li> --}}
      </li>
      <p class="text-dark-mode">Coder Institute &#169; 2019. All Rights Reserved.</p>
    </div>
  </footer>
  <!-- Footer END -->

  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script>
    function myFunction() {
      document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
    }
  </script>
</body>
</html>