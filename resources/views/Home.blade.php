<x-layouts.app>
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div class="row">
            <div class="">
                <div class="owl-carousel header-carousel position-relative mb-5">
                    @foreach ($carousels as $carousel)
                        <div class="owl-carousel-item position-relative">
                            <img class="img-fluid" src="{{ asset($carousel->image) }}" alt="">
                            <div class="position-absolute">
                                <div class="container carousel-desc">
                                    <div class="row justify-content-center">
                                        <div class="text-center">
                                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Scripture Union Ethiopia</h5>
                                            <h1 class="display-3 text-white animated slideInDown mb-4">{{ $carousel->header }}</h1>
                                            <p class="fs-5 fw-medium text-white mb-4 pb-2">{{ $carousel->body }}</p>
                                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Donate</a>
                                            <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Join Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid overflow-hidden px-lg-0">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/youngs.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h4 class="text-secondary text-uppercase mb-3">About Us</h4>
                    <h1 class="mb-5">SCRIPTURE UNION ETHIOPIA</h1>
                    <p class="mb-5">At an international gathering in 1985 in Harare Zimbabwe, Scripture Union leaders from around the world agreed the aims, belief statement, and working principles as a framework for all National movements.</p>
                    <h6 class="text-secondary text-uppercase mb-3">Our Values</h6>
                    <div class="row g-4 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-pray fa-3x text-primary mb-3"></i>
                            <h5>Prayer</h5>
                            <p class="m-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam justo.</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-bible fa-3x text-primary mb-3"></i>
                            <h5>Scripture Reading</h5>
                            <p class="m-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam justo.</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-hand-holding-heart fa-3x text-primary mb-3"></i>
                            <h5>Serving Sacrificially</h5>
                            <p class="m-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam justo.</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <i class="fa fa-handshake fa-3x text-primary mb-3"></i>
                            <h5>Serving With Partnership</h5>
                            <p class="m-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam justo.</p>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary py-3 px-5">Explore More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div class="message container-fluid overflow-hidden px-lg-0">
        <div class="feature px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 pe-lg-0 p-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img style="background-color: black" class="person-image position-absolute img-fluid w-100 h-100" src="{{ asset('img/avatar.png') }}" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 feature-text wow fadeInUp py-5" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">A Little Word From Our Director</h6>
                    <h1 class="mb-5">Welcome To Scripture Union Ethiopia Website</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, non deleniti praesentium fuga hic aliquid nam a consequuntur. Beatae voluptatum illum nihil? Optio commodi numquam doloribus aut, quos quaerat recusandae.entium fuga hic aliquid nam a consequuntur. Beatae voluptatum illum nihil? Optio comm non deleniti praesentium fuga hic aliquid nam a consequuntur. Beatae voluptatum illum nihil? Optio commodi numquam doloribus aut, quos quaerat recusandae.entium fuga hic aliquid nam a consequuntur. Beatae voluptatum illum nihil? Optio commodi numquam doloribus aut, quos quaerat recusandae.entium fuga hic aliquid nam a consequuntur. Beatae voluptatum illum nihil? Optio commodi numquam doloribus aut, quos quaerat recusandae</p>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
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
                        <div class="service-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid events-banner" src="{{ asset('user_uploads/events/banners/'.$event->banner_img) }}" alt="">
                            </div>
                            <h4 class="mb-3">{{ $event->title }}</h4>
                            <p><span class="h5">Start Date:</span> {{ $start_date_time }}</p>
                            <p><span class="h5">End Date:</span> {{ $end_date_time }}</p>
                            <p><span class="h5">Description:</span> {{ $description }}</p>
                            <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                        </div>
                    </div>
                @endforeach
        
              </div>
        </div>
    </div>
    <!-- Service End -->
</x-layouts.app>