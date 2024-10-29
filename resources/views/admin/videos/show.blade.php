<x-layouts.admin>
    {!! $video->youtube_iframe !!}
    <h1>{{$video->title}}</h1>
    <div class="d-flex gap-4">
        <a href="{{ route('admin.videos.edit', $video) }}" class="btn btn-primary ms-3">Edit</a>
        <form action="{{ route('admin.videos.destroy', $video) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">DELETE</button>
        </form>

    </div>
</x-layouts.admin>