<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
    <div style="width: 200px">
        <a href="{{url(/)}}" class="navbar-brand bg-white d-flex align-items-center px-4 px-lg-5">
            <img src="{{ asset('img/SULogo.png') }}" width="100%" alt="">
        </a>
    </div>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link active">Home</a>
            <div class="nav-item dropdown">
                <a href="/about" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Events</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{ route('admin.events.index') }}" class="dropdown-item">All Events</a>
                    <a href="{{ route('admin.events.create') }}" class="dropdown-item">Upload A new event</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="/about" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Annoucments</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{ route('admin.annoucments.index') }}" class="dropdown-item">All Annoucments</a>
                    <a href="{{ route('admin.annoucments.create') }}" class="dropdown-item">Upload A new annoucment</a>
                </div>
            </div>
            
            <a href="{{ route('logout') }}" class="nav-item nav-link">Log Out</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->

