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
  </div>
</x-layouts.app>