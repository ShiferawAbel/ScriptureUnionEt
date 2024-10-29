<x-layouts.app>
  <div class="flex-row">
      <div class="row allshow">
          <div class="col-md-8">
              <div class="mainyoutubevideo  mt-4" style="width: 300px">
                  {!! $video->youtube_iframe !!}
                  <h3>{{ $video->title }}</h3>
              </div>
          </div>
          <div class="col-md-4 recommendation-container">
              <h2>Recommended Videos</h2>
              @foreach ($videos as $video)
                  <a class="cardhover" href="{{ route('videos.show', $video) }}">
                      <div class="recommendation-video">
                          <div class="youtubecard-image">
                              <img class="youtube-img-top image-behind" src="{{ asset('storage/'.$video->thumbnail) }}">
                              <img class="imagevideo-in-front" src="{{ asset('img/play.png') }}" alt="Overlay image">
                          </div>
                          <h5 class="">{{ $video->title }}</h5>
                      </div>
                  </a>
              @endforeach
          </div>
      </div>
  </div>
</x-layouts.app>