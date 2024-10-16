<x-layouts.admin>

  <div class="container-fluid overflow-hidden py-5 px-lg-0">
    @foreach ($stories as $story)
    <div class="container about py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 200px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{asset('storage/'.$story->cover_img)}}" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="mb-2">{{$story->title}}</h1>
                
                <a href="{{ route('admin.stories.show', $story) }}" class="btn btn-primary px-5">Read Story</a>
                <a href="{{ route('admin.stories.edit', $story) }}" class="btn btn-primary px-5">Edit</a>
                {{-- <a href="" class="btn btn-primary px-5">Explore More</a> --}}
            </div>
        </div>
    </div>
        
    @endforeach
</div>
</x-layouts.admin>