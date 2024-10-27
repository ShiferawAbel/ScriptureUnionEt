<x-layouts.app>
  <div class="container mt-5 w-75">
    <div class="card">
      {{-- <img src="{{asset('storage/'.$event->banner_img)}}" class="card-img-top" alt="Event Thumbnail"> --}}
      <img src="{{asset('storage/'.$event->banner_img)}}" class="card-img-top img-fluid" alt="Event Thumbnail" style="height: 70vh; object-fit: cover;">
      <div class="card-body">
        <h1 class="card-title">{{ $event->event_name }} </h1>
        <p class="card-text"><strong>Start Date:</strong> {{ $event->formatted_start_date }} </p>
        <p class="card-text"><strong>End Date:</strong> {{ $event->formatted_end_date }} </p>
        <p class="card-text"><strong>Location:</strong> {{ $event->location }} </p>
        <p class="card-text"><strong>Description: </strong> 
          {{ $event->description }}
        </p>

        <h4>Contact Us For Any Information <i class="fs-4 fab fa-down-arrow"></i> </h4>
        <div class="mb-3">
          <i class="fas fa-phone-alt social-icon"></i><span>+251 911 123 456</span>
        </div>

        <div>
          <a href="https://t.me/su_ethiopia" target="_blank" class="social-icon"><i class="fs-4 fab fa-telegram"></i></a>
          <a href="https://facebook.com/61558550014957" target="_blank" class="social-icon"><i class="fs-4 fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/su.ethiopia57?igsh=d2MwNWdieGx2bWhv&utm_source=qr" class="social-icon"><i class="fs-4 fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
</x-layouts.app>
