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
            @auth
                <a href="{{ route('admin.index') }}" class="donate-link" target="_blank">Admin Dashboard</a>
            @endauth
            <a href="/" class="nav-item nav-link {{ request()->is('home') ? 'active' : '' }}">Home</a>
            <div class="nav-item dropdown">
                <a href="/" class="nav-link dropdown-toggle {{ request()->is('about*') ? 'active' : '' }}" data-bs-toggle="dropdown">About Us</a>
                <div class="dropdown-menu fade-up m-0">
                    {{-- <a href="/about" class="dropdown-item">About Us</a>
                     --}}
                     <a href="{{route('who_we_are')}}" class="dropdown-item {{ request()->is('who_we_are') ? 'active' : '' }}">Who We Are</a>
                     <a href="{{route('vision_mission_values')}}" class="dropdown-item {{ request()->is('vision_mission_values') ? 'active' : '' }}">Missios, Vision and Values</a>
                     <a href="{{route('what_we_believe')}}" class="dropdown-item {{ request()->is('what_we_believe') ? 'active' : '' }}">What We Believe</a>
                     <a href="{{route('history')}}" class="dropdown-item {{ request()->is('history') ? 'active' : '' }}">History</a>
                </div> 
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ request()->is('ministries*') ? 'active' : '' }}" data-bs-toggle="dropdown">Our Ministries</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{ route('studets-ministry') }}" class="dropdown-item">School Ministry</a>
                    <a href="{{ route('church-ministry') }}" class="dropdown-item">Church Ministry</a>
                    <a href="{{ route('church-ministry') }}" class="dropdown-item">Family Ministry</a>
                </div>
            </div>
            <a href="{{route('events.index')}}" class="nav-item nav-link {{ request()->is('events*') ? 'active' : '' }}">Events</a>
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {" data-bs-toggle="dropdown">Blogs</a>
                <div class="dropdown-menu fade-up m-0">
                </div>
            </div> --}}
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ request()->is('stories*', 'annoucments*', 'videos*', 'newsletters*') ? 'active' : '' }}" data-bs-toggle="dropdown">Resources</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{ route('stories.index') }}" class="dropdown-item">Stories</a>
                    <a href="{{ route('annoucments.index') }}" class="dropdown-item">Annoucments</a>
                    <a href="{{ route('videos.index') }}" class="dropdown-item">Videos</a>
                    <a href="{{ route('newsletters.index') }}" class="dropdown-item">News Letters</a>
                    {{-- <a href="{{ route('videos.index') }}" class="dropdown-item">Salvation Stories</a> --}}
                </div>
            </div>
            <a href="{{ route('contacts.create') }}" class="nav-item nav-link {{ request()->is('contacts*') ? 'active' : '' }}">Contact Us</a>
            <a href="{{ url('donate') }}" class="donate-link px-5">Donate</a>

            @auth
                <form method="POST" class="d-flex align-center" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>   
            @endauth
        </div>
    </div>
</nav>
<!-- Navbar End -->

