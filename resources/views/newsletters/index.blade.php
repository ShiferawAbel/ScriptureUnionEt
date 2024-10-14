<x-layouts.app>
  <div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">News Letter</h6>
            <h1 class="mb-5">KEEP IN TOUCH WITH OUR NEWS PAPER</h1>
        </div>
        <div class="row g-4">
            @foreach ($newsletters as $newsletter)
              <a href="{{route('newsletters.show', $newsletter)}}">
                <div class="newsletter-card wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid events-banner" src="{{ asset('storage/'.$newsletter->cover_img) }}" alt="">
                        </div>
                        <div class="p-4 pt-0">
                            <h4 class="mb-3">{{ $newsletter->title }}</h4>
                            <div class="text-center">
                                <a href="{{'storage/'.$newsletter->pdf_file}}" class="btn btn-primary py-md-2 px-md-2 me-3 animated slideInLeft">Download</a>
                                <a href="/about" class="btn btn-secondary py-md-2 px-md-2 animated slideInRight">Description</a>
                            </div>
                        </div>
                    </div>
                </div>
              </a>
            @endforeach
    
          </div>
    </div>
</x-layouts.app>