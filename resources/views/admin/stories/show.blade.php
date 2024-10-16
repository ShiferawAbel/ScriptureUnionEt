<x-layouts.admin>
  <a href="{{route('admin.stories.index')}}">All Stories</a>
  <h1>{{$story->title}}</h1>
  {!! $story->content !!}

  <form action="{{route('admin.stories.destroy', $story)}}" method="post">
    @method('delete')
    @csrf
    <button class="btn btn-primary px-5">Delete Story</button>
  </form>
</x-layouts.admin>