<x-layouts.admin>
    <div class="container">
        <div class="row">
            <a href="{{ route('admin.events.index') }}" class="col-md-4">
                <div class="card-bg bg-primary text-white">
                    <div class="card-body"> 
                        <h5 class="card-title">Events</h5>
                        <img class="sidebar-icon" src="{{ asset('img/events-icon.jpg') }}" alt="">
                    </div>
                </div>
            </a>

            <a href="{{ route('admin.annoucments.index') }}"  class="col-md-4">
                <div class="card-bg bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title">Annoucements</h5>
                        <img src="{{ asset('img/annoucment-icon.png') }}" alt="" class="sidebar-icon">
                    </div>
                </div>
            </a>

            <a href="{{ route('admin.videos.index') }}" class="col-md-4">
                <div class="card-bg bg-danger text-white">
                    <div class="card-body">
                        <h5 class="card-title">Video</h5>   
                        <img src="{{ asset('img/video-icon.png') }}" alt="" class="sidebar-icon">
                    </div>
                </div>
            </a>

            <a href="{{ route('admin.carousels.index') }}" class="col-md-4">
                <div class="card-bg bg-warning text-dark">
                    <div class="card-body">
                        <h5 class="card-title">Content Management</h5>
                        <img src="{{ asset('img/content-management-icon.png') }}" alt="" class="sidebar-icon">
                    </div>
                </div>
            </a>

            <a  href="{{ url('/profile') }}" class="col-md-4">
                <div class="card-bg bg-info text-white">
                    <div class="card-body">
                        <h5 class="card-title">Profile</h5>
                        <img src="{{ asset('img/avatar.png') }}" alt="" class="sidebar-icon">
                    </div>
                </div>
            </a>
        </div>
    </div>
</x-layouts.admin>