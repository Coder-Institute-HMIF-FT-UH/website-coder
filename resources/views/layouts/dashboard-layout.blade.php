<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="{{ asset('bootstrap/css/sb-admin-2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('bootstrap/vendor/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

  <!-- DataTables -->
  <link href="{{ asset('bootstrap/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

  <title>Halaman Admin Coder Institute</title>
</head>
<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    {{-- Sidebar --}}
    @include('admin.inc.sidebar')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        {{-- Navbar --}}
        @include('admin.inc.navbar')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          @yield('content')

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      {{-- Footer --}}
      @include('admin.inc.footer')

    </div>
    <!-- End of Content Wrapper -->
    
  </div>

  @include('admin.inc.modals')

  {{-- This is ckeditor --}}
  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
  <script>
    CKEDITOR.replace( 'ckeditor1' );
  </script>

  <script>
    CKEDITOR.replace( 'ckeditor2' );
  </script>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('bootstrap/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('bootstrap/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('bootstrap/js/sb-admin-2.min.js') }}"></script>

  <!-- Bootstrap 4 Browse File -->
  <script type="application/javascript">
    $('input[type="file"]').change(function(e){
      var fileName = e.target.files[0].name;
      $('.custom-file-label').html(fileName);
    });
  </script>

  <!-- DataTables plugins and scripts -->  
  <!-- Page level plugins -->
  <script src="{{ asset('bootstrap/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('bootstrap/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('bootstrap/js/demo/datatables-demo.js') }}"></script>
</body>
</html>