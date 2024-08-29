<x-layouts.admin>
    <div class="container d-flex justify-content-center">
        <div class="card w-75 mt-3">
            <img style="height: 400px" src="{{ asset('user_uploads/annoucments/thumbnails/'.$annoucment->thumbnail) }}" alt="">
            <h1>{{$annoucment->headline}}</h1>
            <p>{{$annoucment->description}}</p>
            <a href="{{route('admin.annoucments.edit', $annoucment)}}" class="donate-btn">Edit</a>
            <form action="{{ route('admin.annoucments.destroy', $annoucment) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="donate-link">DELETE</button>
            </form>
            
        </div>
    </div>
</x-layouts.admin>