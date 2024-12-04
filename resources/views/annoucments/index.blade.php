<x-layouts.app>
    <!-- Page Header Start -->
    <div class="container-fluid page-header-about py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">News and Announcements</h1>
        </div>
    </div>
    <div class="container row">
    @foreach ($annoucments as $annoucment)
    @php
      $body = substr($annoucment->body, 0, 100).'...'
    @endphp
    <div class="col-md-4 upcoming-event">
        <a href="{{ route('annoucments.show', $annoucment) }}">
              <div class="card upcoming-event">
                <div class="card-image">
                  <img class="card-img-top" src="{{ asset('storage/'.$annoucment->thumbnail) }}">
                  <span class="card-title">{{ $annoucment->headline }}</span>
                </div>
                <div class="card-body">
                  <div class="card-content">
                    <p class="text-dark">{{ $body }}</p>
                  </div>
                  <div class="card-action">
                    <a href="{{route('annoucments.show', $annoucment)}}">Read More</a>
                    {{-- <span class="released-date">9min ago</span> --}}
                  </div>
                </div>
              </div>
            </a>
          </div>  
    @endforeach
    </div>
</x-layouts.app>