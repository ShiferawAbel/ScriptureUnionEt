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
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Libraries Stylesheet -->
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->

  <!-- Template Stylesheet -->
  <link href="{{ asset('admin-resources/css/ruang-admin.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <x-layouts.admin-sidenav />
        <div id="" class="admin-topnav">
            <div id="content">
                <x-layouts.admin-topnav />
                {{ $slot }}
            </div>
        </div>
    </div>
    
     
   


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


  <script src="{{ asset('admin-resources/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admin-resources/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin-resources/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('admin-resources/js/ruang-admin.min.js') }}"></script>
  <script src="{{ asset('admin-resources/vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('admin-resources/js/demo/chart-area-demo.js') }}"></script>  
</body>

</html>