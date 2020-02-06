<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('bootstrap/css/sb-admin-2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('bootstrap/vendor/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
  <title>Halaman Admin Coder Institute</title>
</head>
<body>
  @yield('content')

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('bootstrap/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('bootstrap/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('bootstrap/js/sb-admin-2.min.js') }}"></script>
</body>
</html>