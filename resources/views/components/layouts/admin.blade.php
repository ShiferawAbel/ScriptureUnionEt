<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    @isset($title)
        <title>{{ $title }}</title>
    @else
        <title>SUETHIOPIA ADMIN PANEL</title>
    @endisset

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

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
    <link rel="icon" href="{{ asset('img/web-icon.png') }}" type="image/icon type">

</head>

<body id="page-top">
    <div id="wrapper">
        <div id="" class="admin-topnav">
            <x-layouts.admin-topnav />
            <div class="row">
                <div class="col-md-3">
                    <x-layouts.admin-sidenav />
                </div>
                <div id="content" class="mt-5 pt-5 col-md-9"">
                    {{ $slot }}
                </div>
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
