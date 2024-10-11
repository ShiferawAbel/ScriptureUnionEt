<x-layouts.app>
  <!-- Page Header Start -->
  <div class="story-header">
    <img src="{{asset('storage'.$story->cover_img)}}" alt="">
  </div>
  <!-- Page Header End -->

  <div class="container story-content wow fadeInUP" data-wow-toggle="0.5s">
    {!! $story->content !!}
  </div>
</x-layouts.app>