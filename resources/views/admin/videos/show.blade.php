<x-layouts.admin>
    {!! $video->youtube_iframe !!}
    {{$video->title}}
    <a href="{{ route('admin.videos.edit', $video) }}">Edit</a>
</x-layouts.admin>