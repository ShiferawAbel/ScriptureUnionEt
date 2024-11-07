<x-layouts.app>
  <!-- Page Header Start -->
  <div class="story-header">
    <img class="cover-img" src="{{ asset('storage/'.$story->cover_img) }}" alt="">
    <img class="suLogo" src="{{ asset('img/su-logo.png') }}" alt="">
    <div class="story-title">
      <h1>{{ $story->title }}</h1>
    </div>
  </div>
  <!-- Page Header End -->

  <div class="container-fluid p-0" style="background-color: #2e97c4;">
    <div class="owl-carousel header-carousel position-relative">
      @foreach ($story->images as $image)
        <div class="owl-carousel-item position-relative">
          <img class="img-fluid" src="{{ asset('storage/' . $image->image) }}" alt="{{ $story->title }}" style="width: 50%; height: auto; object-fit: contain; margin: auto;">
        </div>
      @endforeach
    </div>
  </div>
</x-layouts.app>

