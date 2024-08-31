<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
    <x-application-logo></x-application-logo>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link active">Home</a>
            <div class="nav-item dropdown">
                <a href="/about" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="/about" class="dropdown-item">About-Us</a>
                    <a href="price.html" class="dropdown-item">History</a>
                    <a href="feature.html" class="dropdown-item">Who We Are</a>
                    <a href="quote.html" class="dropdown-item">What We Believe</a>
                    <a href="team.html" class="dropdown-item">Our Staff</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Ministries</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{ route('highschool-ministry') }}" class="dropdown-item">High-School Students Ministry</a>
                    <a href="{{ route('church-ministry') }}" class="dropdown-item">Church Ministry</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blogs</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{ route('events.index') }}" class="dropdown-item">Events</a>
                    <a href="{{ route('annoucments.index') }}" class="dropdown-item">News/Anoucments</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Resources</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="price.html" class="dropdown-item">Videos</a>
                    <a href="feature.html" class="dropdown-item">Salvation Stories</a>
                </div>
            </div>
            <a href="{{ url('contact') }}" class="nav-item nav-link">Contact Us</a>
            <a href="{{ url('donate') }}" class="donate-link">Donate</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->

