<x-layouts.admin>
    {!! $video->youtube_iframe !!}
    {{$video->title}}
    <a href="{{ route('admin.videos.edit', $video) }}">Edit</a>
    <form action="{{ route('admin.videos.destroy', $event) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="donate-link">DELETE</button>
    </form>
</x-layouts.admin>