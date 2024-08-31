<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Dashboard</title>
  <link href="{{ asset('admin-resources/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('admin-resources/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('admin-resources/css/ruang-admin.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <x-layouts.admin-sidenav />
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <x-layouts.admin-topnav />
                {{ $slot }}
            </div>
        </div>
    </div>
    
     
<!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{ asset('admin-resources/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admin-resources/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin-resources/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('admin-resources/js/ruang-admin.min.js') }}"></script>
  <script src="{{ asset('admin-resources/vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('admin-resources/js/demo/chart-area-demo.js') }}"></script>  
</body>

</html>