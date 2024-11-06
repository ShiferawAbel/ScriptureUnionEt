<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="The Scripture Union of Ethiopia (SUE) is a community of believers dedicated to living and serving by reading and obeying the word of God.">
    <meta name="keywords" content="Scripture Union, Ethiopia, Christian Ministry, Youth Ministry, Bible Study, Salvation">
    <meta name="author" content="Scripture Union of Ethiopia">
    <title>The Scripture Union of Ethiopia (SUE)</title>
    <link rel="canonical" href="https://www.suethiopia.org">
    <meta property="og:title" content="The Scripture Union of Ethiopia (SUE)" />
    <meta property="og:description"
        content="A community of believers dedicated to living and serving by reading and obeying the word of God." />
    <meta property="og:image" content="https://www.suethiopia.org/img/Asset 3" />
    <meta property="og:url" content="https://www.suethiopia.org" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="The Scripture Union of Ethiopia (SUE)" />
    <meta name="twitter:description"
        content="A community of believers dedicated to living and serving by reading and obeying the word of God." />
    <meta name="twitter:image" content="https://www.suethiopia.org/images/logo.png" />
    <meta name="twitter:site" content="@SUethiopia" />
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- Favicon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/web-icon.png') }}" type="image/icon type">
</head>

<body>
    <x-navbar />
    {{ $slot }}
    <div class="newsletter wow fadeIn" data-wow-delay="0.5s">
        <h1 class="text-light">Newsletter</h1>
        <div class="fotter_back">
            <div class="newsletter_text">
                <p>Be part of our vibrant community by subscribing to the Scripture Union Ethiopia newsletter. Receive
                    the latest updates, inspiring stories, and exclusive content straight to your inbox.</p>
            </div>
            <div class="newsletter_input">
                <form action="{{ route('subscribe') }}" method="post">
                    @csrf
                    <input name="email" class="form-control border-0 w-75 py-3 ps-4 pe-5" type="text"
                        placeholder="Your email">
                    <button type="submit" class="btn-newsletter py-2 px-5 mt-3 me-2">SignUp</button>
                </form>
            </div>
        </div>
    </div>

    @if (request()->route()->getName() !== 'videos.show')
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Address</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Addis Ababa, Ethiopia</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+251-11-56-27-86
                        </p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@suethiopia.org</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://t.me/su_ethiopia"
                                target="_blank"><i class="fab fa-telegram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://facebook.com/61558550014957"
                                target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social"
                                href="https://www.instagram.com/su.ethiopia57?igsh=d2MwNWdieGx2bWhv&utm_source=qr"><i
                                    class="fab fa-instagram"></i></a>
                            {{-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Our Ministries</h4>
                        <a class="btn btn-link" href="">High-Shool and Students Ministry</a>
                        <a class="btn btn-link" href="">Church Ministry</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Quick Links</h4>
                        <a class="btn btn-link" href="/">Home</a>
                        <a class="btn btn-link" href="{{ route('about.index') }}">About Us</a>
                        <a class="btn btn-link" href="{{ route('contacts.create') }}">Contact Us</a>
                        <a class="btn btn-link" href="{{ route('events.index') }}">Events</a>
                        <a class="btn btn-link" href="{{ route('annoucments.index') }}">Annoucements</a>
                        {{-- <a class="btn btn-link" href="">Support</a> --}}
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <img width="300px" src="{{ asset('img/Asset 3.png') }}" alt="" srcset="">
                    </div>
                    {{-- <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Newsletter</h4>
                <p>Stay in the loop! Subscribe to our newsletter for the latest updates and exclusive content.</p>
                <div class="mx-auto" style="max-width: 400px;">
                    <form action="{{ route('subscribe') }}" method="post">
                            @csrf
                            <input name="email" class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="submit" class="btn btn-primary py-2 mt-2 me-2">SignUp</button>
                        </form>
                    </div>
                </div> --}}
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">SU ETHIOPIA</a>, All Right Reserved.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://htmlcodex.com">AEZ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i
                class="bi bi-arrow-up"></i></a>
    @endif




    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".image-carousel").owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                nav: true,
                dots: true
            });
        });
    </script>

    <!-- Template Javascript -->
</body>

</html>
