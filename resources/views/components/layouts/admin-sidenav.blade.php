<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      <img src="{{ asset('img/SuLogo.png') }}">
    </div>
    {{-- <div class="sidebar-brand-text mx-3">Scripture Union</div> --}}
  </a>
  <hr class="sidebar-divider my-0">
  <li class="nav-item active">
    <a class="nav-link" href="index.html">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Menu
  </div>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvents"
      aria-expanded="true" aria-controls="collapseEvents">
      <img class="sidebar-icon" src="{{ asset('img/events-icon.jpg') }}" alt="">
      <span>Events</span>
    </a>
    <div id="collapseEvents" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Events</h6>
        <a class="collapse-item" href="{{ route('admin.events.create') }}">Add New Event</a>
        <a class="collapse-item" href="{{ route('admin.events.index') }}">All Events</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAnnoucment"
      aria-expanded="true" aria-controls="collapseAnnoucment">
      <img src="{{ asset('img/annoucment-icon.png') }}" alt="" class="sidebar-icon">
      <span>Annoucements</span>
    </a>
    <div id="collapseAnnoucment" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Annoucements</h6>
        <a class="collapse-item" href="{{ route('admin.annoucments.create') }}">Add New Annoucement</a>
        <a class="collapse-item" href="{{ route('admin.annoucments.index') }}">All Annoucements</a>
      </div>
    </div>
  </li>

</ul>
<!-- Sidebar -->