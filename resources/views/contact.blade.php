<x-layouts.app>
   {{-- <!-- Page Header Start -->
   <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
    </div>
</div>
<!-- Page Header End --> --}}


<!-- Contact Start -->
<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container contact-page px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-md-6 contact-form wow fadeIn" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Get In Touch</h6>
                <h1 class="mb-4">Contact For Any Query</h1>
                <div class="bg-light p-4">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 pe-lg-4 mt-5 pt-5 wow fadeInRight" data-wow-delay="0.1s">
                <div class="position-relative h-100">
                    <img class="w-100 mt-5 pt-3" src="{{ asset('img/event.jpg')}}" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
</x-layouts.app>