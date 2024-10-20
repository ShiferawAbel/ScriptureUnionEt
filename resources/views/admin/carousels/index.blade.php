<x-layouts.admin>
  <div class="container-xxl py-5">
    <a href="{{ route('admin.carousels.create') }}" class="btn btn-primary">Add new Carousel</a>
    <div class="container py-5">
      <div class="row g-12">
        @foreach ($carousels as $carousel)
          <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item p-4">
              <div class="overflow-hidden mb-4">
                @if ($carousel->story)
                  <img class="img-fluid events-banner" src="{{ asset('storage/'.$carousel->image) }}" alt="">  
                    
                @else
                  <img class="img-fluid events-banner" src="{{ asset('storage/'.$carousel->image) }}" alt="">  
                @endif
              </div>
              <h4 class="mb-3"><span class="h5">Carousel Header: </span> {{ $carousel->header }}</h4>
              <p><span class="h5">Carousel Body: </span> {{ $carousel->body }}</p>
              <a class="donate-link" href="{{ route('admin.carousels.edit', $carousel) }}">Edit</a>
              <form action="{{ route('admin.carousels.destroy', $carousel) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="donate-link"><img width="40px" src="{{ asset('img/delete-icon.png') }}"/></button>
              </form>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</x-layouts.admin>