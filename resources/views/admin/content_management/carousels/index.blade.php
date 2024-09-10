<x-layouts.admin>
  <div class="container-xxl py-5">
    <a href="{{ route('admin.carousels.create') }}" class="btn btn-primary">Add new Carousel</a>
    <div class="container py-5">
      <div class="row g-4">
        @foreach ($carousels as $carousel)
          <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item p-4">
                <div class="overflow-hidden mb-4">
                    <img class="img-fluid events-banner" src="{{ asset($carousel->image) }}" alt="">
                </div>
                <h4 class="mb-3">{{ $carousel->header }}</h4>
                <p><span class="h5">Carousel Header: </span> {{ $carousel->body }}</p>
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