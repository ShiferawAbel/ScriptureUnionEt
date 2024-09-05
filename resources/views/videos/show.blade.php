<x-layouts.app>
  <div class="youtube-show">
    <div class="main_show mt-4">
      <div style="width: 300px">
        {!! $video->youtube_iframe !!}
      </div>
      <div>
        {{ $video->title }}
      </div>
    </div>
    <div class="container show_lists row">
      @foreach ($videos as $video)
      <div class="col-md-4 upcoming-event">
          <a href="{{ route('videos.show', $video) }}">
                <div class="card upcoming-event">
                  <div class="card-image">
                    <img class="card-img-top image-behind" src="{{ asset($video->thumbnail) }}">
                    <img class="image-in-front" src="{{asset('img/play.png')}}" alt="Overlay image">
                  </div>
                  <div class="card-body">
                    <div class="card-content">
                      <p class="text-dark">{{ $video->title }}</p>
                      <p>Watch Now</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>  
      @endforeach
      </div>
  </div>

</x-layouts.app>