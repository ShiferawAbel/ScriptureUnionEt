<x-layouts.app>
  <div style="width: 300px">
    {!! $video->youtube_iframe !!}

  </div>
  <div>
    {{ $video->title }}
  </div>
</x-layouts.app>