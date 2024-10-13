@if (count($stories) !== 0)
<div class="container-xxl py-5">
  <div class="container py-5">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="text-secondary text-uppercase">STORIES</h6>
          <h1 class="mb-5">CATCH UP WITH OUR UP-TO-DATE STORIES</h1>
      </div>
      <div class="row g-4">
          @foreach ($stories as $story)
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="service-item">
                      <div class="overflow-hidden mb-4">
                          <img class="img-fluid stories-banner" src="{{ asset('storage/'.$story->cover_img) }}" alt="">
                      </div>
                      <div class="p-4">
                          <h4 class="mb-3">{{ $story->title }}</h4>
                          {{-- <p><span class="h5">Description:</span> {{ $description }}</p> --}}
                          <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                      </div>
                  </div>
              </div>
          @endforeach
  
        </div>
  </div>
</div>
@endif