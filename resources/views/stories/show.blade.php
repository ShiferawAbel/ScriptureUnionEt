<x-layouts.app>
  <!-- Page Header Start -->
  <div class="story-header">
    <img class="cover-img" src="{{asset('storage/'.$story->cover_img)}}" alt="">
    <img class="suLogo" src="{{asset('img/SuLogo.png')}}" alt="">
    <div class="story-title">
      <h1>{{ $story->title }}</h1>
    </div>
  </div>
  <!-- Page Header End -->

  <div class="container-xxl service-carousel p-0 position-relative">
    <div class="fixed2-image">
      <img src="{{ asset('img/lg14.c6fcdbf66538541802cc.png') }}" alt="Fixed Image" class="img-fluid">
    </div>
    <!-- Carousel Start -->
    <div class="container-xxl Service py-5">
      <div id="serviceCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#serviceCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#serviceCarousel" data-slide-to="1"></li>
          <li data-target="#serviceCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="text-center carousel-header wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">Events</h6>
            <h1 class="mb-5">UPCOMING EVENTS YOU DON'T WANT TO MISS</h1>
          </div>
          @foreach ($events as $event)
          <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
            <img class="d-block w-100" src="{{ asset('storage/' . $event->banner_img) }}" alt="Event Image">
            <div class="carousel-caption d-none d-md-block">
              <h4 class="mb-3">{{ $event->event_name }}</h4>
              <p><span class="h5">Description:</span> {{ substr($event->description, 0, 100) }}...</p>
              <div class="carousel-buttons">
                <a href="" class="btn btn-outline  animated slideInLeft">
                  Read More
                </a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#serviceCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#serviceCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>


















  <div class="story-content wow fadeInUP" data-wow-toggle="0.5s">
    {!! $story->content !!}
    @if ($story->images)
      <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="text-center">
                <h6 class="text-secondary text-uppercase">Gallery</h6>
                <h1 class="mb-0">SOME MEMMORIES...</h1>
            </div>
            <div class="owl-carousel image-carousel wow fadeInUp" data-wow-delay="0.1s">
              @foreach ($story->images as $image)
                <div class="image-item p-4 my-5">
                    <img class="img-fluid" src="{{ asset('storage/'.$image->image) }}" alt="Image 1">
                </div>
                  
              @endforeach
            </div>
        </div>
      </div>
        
    @endif
  
  </div>
</x-layouts.app>