<x-layouts.app>
  <!-- Page Header Start -->
  <div class="story-header">
    <img class="cover-img" src="{{asset('storage/'.$story->cover_img)}}" alt="">
    <img class="suLogo" src="{{asset('img/su-logo.png')}}" alt="">
    <div class="story-title">
      <h1>{{ $story->title }}</h1>
    </div>
  </div>
  <!-- Page Header End -->

  <div class="container service-carousel p-5 position-relative">
    {!! $story->content !!}
    <!-- Carousel Start -->
    <div class="container Service py-5">
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
          @foreach ($story->images as $image)
          <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
            <img class="d-block w-100" src="{{ asset('storage/' . $image->image) }}" alt="Event Image">
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

</x-layouts.app>









