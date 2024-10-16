<!-- Sidebar -->
<ul class="navbar-nav  bg-white navbar-light  fixed-side-nav shadow border-top border-5 border-primary sidebar admin-sidenav" id="accordionSidebar">
  
  <hr class="sidebar-divider my-0">
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('admin.index') }}">
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

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVideo"
      aria-expanded="true" aria-controls="collapseVideo">
      <img src="{{ asset('img/video-icon.png') }}" alt="" class="sidebar-icon">
      <span>Videos</span>
    </a>
    <div id="collapseVideo" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Annoucements</h6>
        <a class="collapse-item" href="{{ route('admin.videos.create') }}">Add New Video</a>
        <a class="collapse-item" href="{{ route('admin.videos.index') }}">All Videos</a>
      </div>
    </div>
  </li>
  
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNewsletter"
      aria-expanded="true" aria-controls="collapseNewsletter">
      <img src="{{ asset('img/newsletter.png') }}" alt="" class="sidebar-icon">
      <span>Newsletters</span>
    </a>
    <div id="collapseNewsletter" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Annoucements</h6>
        <a class="collapse-item" href="{{ route('admin.newsletters.create') }}">Add New Newsletter</a>
        <a class="collapse-item" href="{{ route('admin.newsletters.index') }}">All Newsletters</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStory"
      aria-expanded="true" aria-controls="collapseStory">
      <img src="{{ asset('img/story.png') }}" alt="" class="sidebar-icon">
      <span>Stories</span>
    </a>
    <div id="collapseStory" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Annoucements</h6>
        <a class="collapse-item" href="{{ route('admin.stories.create') }}">Add New Story</a>
        <a class="collapse-item" href="{{ route('admin.stories.index') }}">All Storys</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#contentManagement"
      aria-expanded="true" aria-controls="contentManagement">
      <img src="{{ asset('img/content-management-icon.png') }}" alt="" class="sidebar-icon">
      <span>Content Management</span>
    </a>
    <div id="contentManagement" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Content Management</h6>
        <a class="collapse-item" href="{{ route('admin.carousels.index') }}">Carousels</a>
      </div>
    </div>
  </li>

</ul>
<!-- Sidebar -->