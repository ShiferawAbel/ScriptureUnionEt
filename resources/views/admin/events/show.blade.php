<x-layouts.admin>
    <div class="container d-flex justify-content-center">
        <div class="card w-75 mt-3">
            <img style="height: 400px" src="{{ asset('storage/'.$event->banner_img) }}" alt="">
            <h1>{{$event->event_name}}</h1>
            <p>{{$event->description}}</p>
            <div>

                <a href="{{route('admin.events.edit', $event)}}" class="btn btn-success">Edit</a>
                <form action="{{ route('admin.events.destroy', $event) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-dangerr">DELETE</button>
                </form>
            </div>
            
        </div>
    </div>
</x-layouts.admin>