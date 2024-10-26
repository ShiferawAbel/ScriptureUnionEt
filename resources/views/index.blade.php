<x-layouts.app>
  <div class="container-fluid carousel-custom p-0 position-relative">
    <div class="fixed-image">
      <img src="{{ asset('img/New Project11.png') }}" alt="Fixed Image" class="img-fluid">
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
                      <div class="carousel-buttons mt-4">
                        <a href="/donate" class="btn btn-filled py-md-3 px-md-5 me-3 animated slideInLeft">
                          Donate
                        </a>
                        <a href="/about" class="btn btn-outline py-md-3 px-md-5 animated slideInRight">
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
                      <div class="carousel-buttons">
                        <a href="/donate" class="btn btn-filled py-md-3 px-md-5 me-3 animated slideInLeft">
                          Donate
                        </a>                        
                        <a href="{{ route('stories.show', $carousel->story) }}" class="btn btn-outline py-md-3 px-md-5 animated slideInRight">Read Story</a>
                      </div>
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
                      <div class="carousel-buttons">
                        <a href="/donate" class="btn btn-filled py-md-3 px-md-5 me-3 animated slideInLeft">
                          Donate
                        </a>
                        <a href="/about" class="btn btn-outline py-md-3 px-md-5 animated slideInRight">
                          About Us
                        </a>
                      </div>
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
  
  <!-- About Section -->
   <section id="about" class="about section">
    <div class="container wow fadeIn" data-wow-delay="0.5s">
      <div class="row align-items-xl-center gy-5">

        <div class="col-xl-5 content">
          <h2 class="text-primary">About Us</h2>
          <h2>SCRIPTURE UNION ETHIOPIA</h2>
          <p>
            The Scripture Union of Ethiopia serves God's heart's desire for high school. It is eager to see middle school and high school students believe in the truth of his word and accept Jesus Christ as their savior. 
            The young people who have found salvation will be friends of this life-giving word of God to have an edified life. Those who believe in Jesus and follow him be the cause of salvation for others. 
            Scripture Union works diligently to be a servant to parents, church and society.
          </p>
          <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        </div>

        <div class="col-xl-7">
          <div class="row gy-4 icon-boxes">

            <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
              <div class="icon-box">
                <i class="fa fa-pray fa-5x text-primary"></i>
                <h3>Prayer</h3>
                <p>
                  We put prayer first (Philippians 4:6). We strive to know God's will through prayer. In prayer we come before God for thanksgiving. In prayer, we show that we love our God.
                </p>              
              </div>
            </div> <!-- End Icon Box -->
            
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.9s">
              <div class="icon-box">
                <i class="fa fa-bible fa-3x text-primary"></i>
                <h3>Scripture Reading</h3>
                <p>
                  SU is a word-reading ministry. Reading the life-changing Word of God is the primary practice of our ministry. We believe that the change in people's lives is linked to reading and obeying the Holy Word.
                </p>
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6 wow fadeIn" data-wow-delay="0.11s">
              <div class="icon-box">
                <i class="fa fa-hand-holding-heart fa-3x text-primary"></i>
                <h3>Serving Sacrificially</h3>
                <p>
                  Serving students is our calling. It is also a steward we received from God. We serve them faithfully by paying all the costs required to serve them (Mark 10:45).
                </p>
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6 wow fadeIn" data-wow-delay="0.13s">
              <div class="icon-box">
                <i class="fa fa-handshake fa-3x text-primary"></i>
                <h3>Serving With Partnership</h3>
                <p>
                  We believe that the ministry of God's kingdom is not a solitary race. We work together with all the institutions and individuals who want to partner with Scripture Union in serving students with their money, skills, grace, etc.
                </p>
              </div>
            </div> <!-- End Icon Box -->

          </div>
        </div>

      </div>
    </div>
    
  </section>
  <!-- /About Section -->
  
  
        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section dark-background my-5">

          <img src="{{ asset('img/scripture-union-ethiopia-highschool-students-photo.png') }}" alt="">
    
          <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
              <div class="col-xl-10">
                <div class="text-center">
                  <h3>Scripture Union Ethiopia</h3>
                  <p>Your generous donation will help us continue this vital work, reaching more students with the transformative power of God’s Word. Join us in making a difference today.</p>
                  <a class="cta-btn" href="#">Donate</a>
                </div>
              </div>
            </div>
          </div>
    
        </section><!-- /Call To Action Section -->
    
  
  
  <!-- Events Start -->
  <div class="container">

    <div class="row gy-5">
      <div class="text-center events-header wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="text-primary text-uppercase">Events</h6>
        <h1 class="mb-2">UPCOMING EVENTS YOU DON'T WANT TO MISS</h1>
      </div>
      @foreach ($events as $event)
      <div class="col-xl-4 col-md-6">
        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">
          @php
          $description = substr($event->description, 0, 100).'...';
          @endphp
          <div class="post-img position-relative overflow-hidden">
            <img src="{{ asset('storage/'.$event->banner_img) }}" class="img-fluid" alt="">
            <span class="post-date">December 12</span>
          </div>

          <div class="post-content d-flex flex-column">

            <h3 class="post-title">{{ $event->event_name }}</h3>

            <div class="meta d-flex align-items-center">
               <span class="ps-2">{{ $description }}</span>
              <span class="px-3 text-black-50"></span>
            </div>

            <hr>

            <a href="" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

          </div>

        </div>
      </div>
      @endforeach
    </div>

  </div>

</section>
<!-- Events End -->


  <div class="container row m-auto postion-relative">
      <div class="container py-5">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              <h6 class="text-primary text-uppercase">VIDEOS</h6>
              <h1 class="mb-5">CHECK OUT OUR LATEST VIDEOS</h1>
          </div>
         <div class="row">
          @foreach ($videos as $video)
          <div class="col-md-4 upcoming-event">
              <a href="{{ route('videos.show', $video) }}">
                  <div class="card upcoming-event">
                      <div class="card-image">
                          <img class="card-img-top image-behind" src="{{ asset('storage/'.$video->thumbnail) }}">
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
  </div>


  <div class="container-xxl py-5">
      <div class="container py-5">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              <h6 class="text-primary text-uppercase">STORIES</h6>
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
            <h6 class="text-primary text-uppercase">News Letter</h6>
            <h1 class="mb-5">KEEP IN TOUCH WITH OUR NEWS LETTER</h1>
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