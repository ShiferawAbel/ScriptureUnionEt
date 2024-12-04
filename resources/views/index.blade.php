<x-layouts.app>
    <!-- Carousel Section -->
    <div class="container-fluid carousel-custom p-0 position-relative">
      <div class="fixed-image">
        <img src="{{ asset('img/carousel-graphics.png') }}" alt="Fixed Image" class="img-fluid">
      </div>
      <div class="container-fluid carousel-custom p-0">
            <div class="owl-carousel header-carousel position-relative">
              <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('img/scripture-union-ethiopia-highschool-students-photo.png') }}" alt="Scripture union of Ethiopia highschool students photo">
                <div class="position-absolute">
                  <div class="carousel-desc">
                    <div class="row justify-content-center">
                      <div class="text-center">
                        <h1 class="display-3 text-white animatedslideInDown mb-3">SCRIPTURE UNION OF ETHIOPIA</h1>
                        <h5 class="fs-5 fw-medium text-white mb-0 pb-2 wow fadeIn" data-wow-delay="0.1s">Serving God’s Vision for highschool.</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @foreach ($carousels as $carousel)
                @if ($carousel->story)
                  <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('storage/' . $carousel->story->cover_img) }}" alt="">
                    <div class="position-absolute">
                      <div class="container carousel-desc">
                        <div class="row justify-content-center">
                          <div class="text-center">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Scripture Union Ethiopia</h5>
                            <h1 class="display-3 text-white animated slideInDown mb-4">{{ $carousel->header }}</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">{{ $carousel->body }}</p>
                            <div class="carousel-buttons">
                              <a href="/donate" class="btn btn-filled py-md-2 px-md-4 me-3 animated slideInLeft">Donate</a>
                              <a href="{{ route('stories.show', $carousel->story) }}" class="btn btn-outline py-md-2 px-md-4 animated slideInRight">Read Story</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @else
                  <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('storage/' . $carousel->image) }}" alt="">
                    <div class="position-absolute">
                      <div class="container carousel-desc">
                        <div class="row justify-content-center">
                          <div class="text-center">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Scripture Union Ethiopia</h5>
                            <h1 class="display-3 text-white animated slideInDown mb-4">{{ $carousel->header }}</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">{{ $carousel->body }}</p>
                            <div class="carousel-buttons">
                              <a href="/donate" class="btn btn-filled py-md-2 px-md-4 me-3 animated slideInLeft">Donate</a>
                              <a href="/about" class="btn btn-outline py-md-2 px-md-4 animated slideInRight">About Us</a>
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

    <!-- Carousel End -->

    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container wow fadeIn" data-wow-delay="0.5s">
            <div class="row align-items-xl-center gy-5">

                <div class="col-xl-5 content">
                    <h2 class="text-primary">About Us</h2>
                    <h2>SCRIPTURE UNION ETHIOPIA</h2>
                    <p>
                        The Scripture Union of Ethiopia serves God's heart's desire for high school. It is eager to see
                        middle school and high school students believe in the truth of his word and accept Jesus Christ
                        as their savior.
                        The young people who have found salvation will be friends of this life-giving word of God to
                        have an edified life. Those who believe in Jesus and follow him be the cause of salvation for
                        others.
                        Scripture Union works diligently to be a servant to parents, church and society.
                    </p>
                    <a href="{{ route('about.index') }}" class="read-more"><span>Read More</span><i
                            class="bi bi-arrow-right"></i></a>
                </div>

                <div class="col-xl-7">
                    <div class="row gy-4 icon-boxes">

                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="icon-box">
                                <i class="fa fa-pray fa-5x text-primary"></i>
                                <h3>Prayer First</h3>
                                <p>
                                    We put prayer first (Philippians 4:6). We strive to know God's will through prayer.
                                    In prayer we come before God for thanksgiving. In prayer, we show that we love our
                                    God.
                                </p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="icon-box">
                                <i class="fa fa-bible fa-3x text-primary"></i>
                                <h3>Scripture Reading First</h3>
                                <p>
                                    SU is a word-reading ministry. Reading the life-changing Word of God is the primary
                                    practice of our ministry. We believe that the change in people's lives is linked to
                                    reading and obeying the Holy Word.
                                </p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.9s">
                            <div class="icon-box">
                                <i class="fa fa-hand-holding-heart fa-3x text-primary"></i>
                                <h3>Serving Sacrificially</h3>
                                <p>
                                    Serving students is our calling. It is also a steward we received from God. We serve
                                    them faithfully by paying all the costs required to serve them (Mark 10:45).
                                </p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6 wow fadeIn " data-wow-delay="0.11s">
                            <div class="icon-box mt-1">
                                <i class="fa fa-handshake fa-3x text-primary"></i>
                                <h3>Serving With Partnership</h3>
                                <p>
                                    We believe that the ministry of God's kingdom is not a solitary race. We work
                                    together with all the institutions and individuals who want to partner with
                                    Scripture Union in serving students with their money, skills, grace, etc.
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
    <section id="call-to-action" class="call-to-action  section dark-background">

        <img src="{{ asset('img/scripture-union-ethiopia-highschool-students-photo.png') }}" alt="">

        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Scripture Union Of Ethiopia</h3>
                        <p>Your generous donation will help us continue this vital work, reaching more students with the
                            transformative power of God’s Word. Join us in making a difference today.</p>
                        <a class="cta-btn" href="{{ url('donate') }}">Donate</a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Call To Action Section -->

    <!-- Events Start -->
    <div class=" evets-show  position-relative">
        <div class="container">
            <div class="back-image wow fadeIn" data-wow-delay="0.1s">
                <img src="{{ asset('img/videobg.png') }}" alt="Fixed Image" class="img-fluid">
            </div>
                <div class="row ontheTop">
                    <div class="text-center events-header wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="text-primary text-uppercase">Events</h6>
                        <h1 class="mb-2">UPCOMING EVENTS YOU DON'T WANT TO MISS</h1>
                    </div>
                    @foreach ($events as $event)
                        <div class="col-xl-4 col-md-6">
                            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">
                                @php
                                    $description = substr($event->description, 0, 100) . '...';
                                @endphp
                                <div class="post-img position-relative overflow-hidden">
                                    <img src="{{ asset('storage/' . $event->banner_img) }}" class="img-fluid"
                                        alt="">
                                    <span class="post-date">{{ $event->month_day_start }}</span>
                                </div>

                                <div class="post-content d-flex flex-column">

                                    <h3 class="post-title">{{ $event->event_name }}</h3>

                                    <div class="meta d-flex align-items-center">
                                        <span class="ps-2">{{ $description }}</span>
                                        <span class="px-3 text-black-50"></span>
                                    </div>

                                    <hr>
                                    <a href="{{ route('events.show', $event) }}"
                                        class="readmore stretched-link"><span>Read More</span><i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            </section>
        </div>
        <!-- Events End --> 

        <!-- video start -->
        <div class="container videos row mx-auto postion-relative">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">VIDEOS</h6>
                <h1 class="">CHECK OUT OUR LATEST VIDEOS</h1>
            </div>
        </div>
        <div class="banner wow fadeInUp" data-wow-delay="0.5s">
            <div class="left">
                <h1>Subscribe Our Youtube Channel</h1>
                <p>Join our growing community and stay updated with our latest teachings, events, and spiritual growth
                    resources. By subscribing to our channel, you'll be the first to know about new videos, inspiring
                    messages, and opportunities to connect with other believers.</p>
                <a class="Subscribe_Youtube btn btn-outlined" href="https://www.youtube.com/@SUEthiopia" target="_blank">Visit</a>
            </div>
            <div class="right mt-4">
                <img src="{{ asset('img/about-us-header.jpg') }}" alt="Promotional Image">
                {{-- <div class="video-icon"> 
          <!-- youtube logo image -->
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0,0,256,256">
            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.33333,5.33333)"><path d="M43.2,33.9c-0.4,2.1 -2.1,3.7 -4.2,4c-3.3,0.5 -8.8,1.1 -15,1.1c-6.1,0 -11.6,-0.6 -15,-1.1c-2.1,-0.3 -3.8,-1.9 -4.2,-4c-0.4,-2.3 -0.8,-5.7 -0.8,-9.9c0,-4.2 0.4,-7.6 0.8,-9.9c0.4,-2.1 2.1,-3.7 4.2,-4c3.3,-0.5 8.8,-1.1 15,-1.1c6.2,0 11.6,0.6 15,1.1c2.1,0.3 3.8,1.9 4.2,4c0.4,2.3 0.9,5.7 0.9,9.9c-0.1,4.2 -0.5,7.6 -0.9,9.9z" fill="#ff0000"></path><path d="M20,31v-14l12,7z" fill="#ffffff"></path></g></g>
          </svg>
          <!-- youtube logo image -->
        </div>  --}}
            </div>
        </div>


        <div class="container">
            <div class="row">
                @foreach ($videos as $video)
                    <div class="col-md-4">
                        <a href="{{ route('videos.show', $video) }}">
                            <div class="card">
                                <div class="card-image position-relative">
                                    <img class="card-img-top" src="{{ asset('storage/' . $video->thumbnail) }}"
                                        alt="Video Thumbnail">
                                    <div class="card-overlay">
                                        <p class="text-white">{{ $video->title }}</p>
                                        <a href="{{ route('videos.show', $video) }}" class="btn btn-filled">Watch
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- video End -->

        <!-- story start -->
        <div class="container home-story">
            <div class="text-center py-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">STORIES</h6>
                <h1 class="mb-3">CATCH UP WITH OUR UP-TO-DATE STORIES</h1>
            </div>
            <div class="container-custom wow fadeInUp" data-wow-delay="0.3s">
                <div class="image-section">
                    <img src="{{ asset('img/about-us-header.jpg') }}" alt="Ethiopian Christian Students">
                </div>
                <div class="articles-section">
                    @foreach ($stories as $story)
                        <a href="{{ route('stories.show', $story) }}">
                            <div class="article wow fadeInUp" data-wow-delay="0.5s">
                                <img src="{{ asset('storage/' . $story->cover_img) }}" alt="Article Image">
                                <div class="text">
                                    <div class="date">
                                        {{ $story->month_day_start }}
                                    </div>
                                    <div class="title">
                                        {{ $story->title }}
                                    </div>
                                    <div class="category">
                                        Read More
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
            
        
        <!-- story End -->
</x-layouts.app>
