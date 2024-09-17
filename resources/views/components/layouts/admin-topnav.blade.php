<!-- TopBar -->
<nav class="navbar navbar-expand-lg  fixed-top-nav shadow border-top border-5 border-primary  p-0">
  <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>
  <a  href="{{ url()->previous() }}">
    <i class="fa fa-arrow-circle-o-left"></i>
    <span>Back</span>
</a>
  <a class="d-flex align-items-center justify-content-center" href="{{ route('admin.index') }}">
    <div class="brand-icon">
      <img src="{{ asset('img/SuLogo.png') }}">
    </div>
    {{-- <div class="sidebar-brand-text mx-3">Scripture Union</div> --}}
  </a>
  <ul class="navbar-nav mr-auto  ms-auto profilecolor">
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <img class="img-profile rounded-circle" src="{{ asset('user_uploads/'. auth()->user()->profile_img) }}" style="max-width: 60px">
        <span class="ml-2 d-none d-lg-inline small">{{ auth()->user()->name }}</span>
      </a>
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="{{ route('profile.update') }}">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          Profile
        </a>
        <a class="dropdown-item" href="login.html">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            
            <x-responsive-nav-link :href="route('logout')"
            onclick="event.preventDefault();
                                  this.closest('form').submit();">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  {{ __('Log Out') }}
              </x-responsive-nav-link>
          </form>
        </a> 
      </div>
    </li>
  </ul>
</nav>
<!-- Topbar -->