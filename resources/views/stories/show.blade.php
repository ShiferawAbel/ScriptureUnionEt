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