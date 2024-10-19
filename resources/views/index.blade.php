<x-layouts.app>
    <div class="container-fluid carousel-custom p-0 position-relative">
    <div class="fixed-image">
        <img src="{{ asset('img/New Project.png') }}" alt="Fixed Image" class="img-fluid">
    </div>
    <!-- Carousel Start -->
    <div class="container-fluid carousel-custom p-0">
      <div class="row">
          <div class="">
              <div class="owl-carousel header-carousel position-relative">
                  <div class="owl-carousel-item position-relative">
                      <img class="img-fluid" src="{{ asset('img/scripture-union-ethiopia-highschool-students-photo.png') }}" alt="Scripture union of Ethiopia highschool students photo">
                      <div class="position-absolute">
                          <div class="container carousel-desc">
                            <div class="row justify-content-center">
                                <div class="text-center">
                                  <h1 class="display-3 text-white animated slideInDown mb-3">
                                    SCRIPTURE UNION OF ETHIOPIA
                                  </h1>
                                  <h5 class="fs-5 fw-medium text-white mb-0 pb-2 wow fadeIn" data-wow-delay="0.1s">
                                    Students following Jesus; edified by the word of God; prepared for service.
                                  </h5>
                                  <div class="carousel-buttons">
                                    <a href="/donate" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
                                        Donate
                                      </a>
                                      <a href="/about" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">
                                        About Us
                                      </a>
                                  </div>
                                </div>
                              </div>
                              
                          </div>
                      </div>
                  </div>
                  @foreach ($carousels as $carousel)
                  @if ($carousel->story)
                      
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('storage/'.$carousel->image) }}" alt="">
                        <div class="position-absolute">
                            <div class="container carousel-desc">
                                <div class="row justify-content-center">
                                    <div class="text-center">
                                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Scripture Union Ethiopia</h5>
                                        <h1 class="display-3 text-white animated slideInDown mb-4">{{ $carousel->header }}</h1>
                                        <p class="fs-5 fw-medium text-white mb-4 pb-2">{{ $carousel->body }}</p>
                                        <a href="/donate" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Donate</a>
                                        <a href="{{route('stories.show', $carousel->story)}}" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Read Story</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  @else
                      
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('storage/'.$carousel->image) }}" alt="">
                        <div class="position-absolute">
                            <div class="container carousel-desc">
                                <div class="row justify-content-center">
                                    <div class="text-center">
                                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Scripture Union Ethiopia</h5>
                                        <h1 class="display-3 text-white animated slideInDown mb-4">{{ $carousel->header }}</h1>
                                        <p class="fs-5 fw-medium text-white mb-4 pb-2">{{ $carousel->body }}</p>
                                        <a href="/donate" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Donate</a>
                                        <a href="/about" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">About Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
          </div>
      </div>
  </div>
  </div>

    

  {{-- {{dd($carousels)}} --}}
  <!-- Carousel End -->

  {{-- <div>
      <p class="mottoish wow fadeInLeft" data-wow-delay="0.1s"> Serving God’s Vision for high school </p> 
  </div> --}}

    <!-- About Start -->

  <div class="container-fluid  about-us-home pt-3 ourvalue-section">
    <h4 class="text-secondary text-uppercase mb-3">About Us</h4>
    <div class="row">
      <div class="col-lg-4 help-section" data-wow-delay="0.3s">
        <h1 class="mb-5">SCRIPTURE UNION ETHIOPIA</h1>
        <p class="mb-5">The Scripture Union of Ethiopia serves God's heart's desire for high school. It is eager to see 
            middle school and high school students believe in the truth of his word and accept Jesus Christ as 
            their savior. The young people who have found salvation will be friends of this life-giving word of 
            God to have an edified life. Those who believe in Jesus and follow him be the cause of salvation for 
            others. Scripture Union works diligently to be a servant to parents, church and society.</p>
        </div>
        <div class="col-lg-8 features-section">
            <div class="row">
            <h6 class="text-secondary text-uppercase mb-3">Our Values</h6>
          <div class="col-md-4 feature-box wow fadeIn" data-wow-delay="0.5s">
            <i class="fa fa-pray fa-3x text-primary mb-3"></i>
            <h5>Prayer</h5>
            <p class="m-0">
                We put prayer first (Philippians 4:6). We strive to know God's will through prayer. In prayer we come before God for thanksgiving. In prayer, we show that we
                love our God.
            </p>
          </div>
          <div class="col-md-4 feature-box wow fadeIn" data-wow-delay="0.5s">
            <i class="fa fa-bible fa-3x text-primary mb-3"></i>
            <h5>Scripture Reading</h5>
            <p class="m-0">
                SU is a word-reading ministry. Reading the life-changing Word of God is the primary practice of 
                our ministry. We believe that the change in people's lives is linked to reading and obeying the Holy 
                Word. 
            </p>
          </div>
          <div class="col-md-4 feature-box wow fadeIn" data-wow-delay="0.5s">
            <i class="fa fa-hand-holding-heart fa-3x text-primary mb-3"></i>
            <h5>Serving Sacrificially</h5>
            <p class="m-0">
                Serving students is our calling. It is also a steward we received from God. We serve them faithfully 
                by paying all the costs required to serve them (Mark 10:45).
            </p>
          </div>
          <div class="col-md-4 feature-box wow fadeIn" data-wow-delay="0.5s">
            <i class="fa fa-handshake fa-3x text-primary mb-3"></i>
            <h5>Serving With Partnership</h5>
            <p class="m-0">
                We believe 
                that the ministry of God's kingdom is not a solitary race. We work together with all the institutions and 
                individuals who want to partner with Scripture Union in serving students with their money, skills, 
                grace, etc.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Service Start -->
  <div class="container-xxl Service py-5">
      <div class="container py-5">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              <h6 class="text-secondary text-uppercase">Events</h6>
              <h1 class="mb-5">UPCOMING EVENTS YOU DON'T WANT TO MISS</h1>
          </div>
          <div class="row g-4">
              @foreach ($events as $event)
                  @php
                    $start_date_time = str_replace('T', ' @ ', $event->start_date_time);
                    $end_date_time = str_replace('T', ' @ ', $event->end_date_time);
                    $description = substr($event->description, 0, 100).'...'
                  @endphp
                  <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                      <div class="service-item">
                          <div class="overflow-hidden mb-4">
                              <img class="img-fluid events-banner" src="{{ asset('storage/'.$event->banner_img) }}" alt="">
                          </div>
                          <div class="p-4">
                              <h4 class="mb-3">{{ $event->event_name }}</h4>
                              <p><span class="h5">Start Date:</span> {{ $start_date_time }}</p>
                              <p><span class="h5">End Date:</span> {{ $end_date_time }}</p>
                              <p><span class="h5">Description:</span> {{ $description }}</p>
                              <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                          </div>
                      </div>
                  </div>
              @endforeach
      
            </div>
      </div>
  </div>
  <!-- Service End -->

  <div class="container row m-auto">
      <div class="container py-5">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              <h6 class="text-secondary text-uppercase">VIDEOS</h6>
              <h1 class="mb-5">CHECK OUT OUR LATEST VIDEOS</h1>
          </div>
          @foreach ($videos as $video)
          <div class="col-md-4 upcoming-event">
              <a href="{{ route('videos.show', $video) }}">
                  <div class="card upcoming-event">
                      <div class="card-image">
                          <img class="card-img-top image-behind" src="{{ asset($video->thumbnail) }}">
                          <img class="image-in-front" src="{{asset('img/play.png')}}" alt="Overlay image">
                      </div>
                      <div class="card-body watch-video-desc">
                          <div class="card-content">
                          <p class="text-dark">{{ $video->title }}</p>
                          <p>Watch Now</p>
                          </div>
                      </div>
                  </div>
              </a>
          </div>  
          @endforeach
      </div>
  </div>


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
                              <a class="btn-slide mt-2" href="{{route('stories.show', $story)}}"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                          </div>
                      </div>
                  </div>
              @endforeach
      
            </div>
      </div>
  </div>


  <div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">News Letter</h6>
            <h1 class="mb-5">KEEP IN TOUCH WITH OUR NEWS PAPER</h1>
        </div>
        <div class="row g-5 align-center">
            @foreach ($newsletters as $newsletter)
                <div class="newsletter-card wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid events-banner" src="{{ asset('storage/'.$newsletter->cover_img) }}" alt="">
                        </div>
                        <div class="p-4 pt-0">
                            <h4 class="mb-3">{{ $newsletter->title }}</h4>
                            <div class="text-center">
                                <a href="{{'storage/'.$newsletter->pdf_file}}" class="btn btn-primary py-md-2 px-md-2 me-3 animated slideInLeft">Download</a>
                                <a href="{{route('newsletters.show', $newsletter)}}" class="btn btn-secondary py-md-2 px-md-2 animated slideInRight">Description</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <a href="{{route('newsletters.index')}}" class="btn btn-primary py-md-2 px-md-2">All Newsletters>></a>
          </div>
    </div>
    </div>
      </script>
      
</x-layouts.app>