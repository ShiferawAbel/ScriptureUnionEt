<x-layouts.admin>
    <div class="container d-flex justify-content-center">
        <div class="card w-75 mt-3">
            <img style="height: 400px" src="{{ asset('user_uploads/events/banners/'.$event->banner_img) }}" alt="">
            <h1>{{$event->event_name}}</h1>
            <p>{{$event->description}}</p>
            <a href="{{route('admin.events.edit', $event)}}" class="donate-btn">Edit</a>
            <form action="{{ route('admin.events.destroy', $event) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="donate-link">DELETE</button>
            </form>
            
        </div>
    </div>
</x-layouts.admin>