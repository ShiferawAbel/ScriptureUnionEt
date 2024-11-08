<x-layouts.app>
    @section('meta_title', $meta_data['title']) @section('meta_description', $meta_data['description'])
    @section('meta_keywords', $meta_data['keywords']) @section('meta_author', $meta_data['author'])
    @section('meta_canonical', $meta_data['canonical']) @section('meta_og_title',
    $meta_data['og_title']) @section('meta_og_description', $meta_data['og_description'])
    @section('meta_og_image', $meta_data['og_image']) @section('meta_og_url', $meta_data['og_url'])
    @section('meta_og_type', $meta_data['og_type']) @section('meta_twitter_card',
    $meta_data['twitter_card']) @section('meta_twitter_title', $meta_data['twitter_title'])
    @section('meta_twitter_description', $meta_data['twitter_description']) @section('meta_twitter_image',
    $meta_data['twitter_image']) @section('meta_twitter_site', $meta_data['twitter_site'])
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
                        <form method="post" action="{{ route('contacts.store') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-newsletter w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 pe-lg-4 mt-5 pt-5 wow fadeInRight" data-wow-delay="0.1s">
                    <div class="position-relative h-100">
                        <ul class="contact-list">
                            <h5>CONTACT US THROUGH OUR ADDRESSES</h5>
                            <li>
                                <a class="btn btn-social" href="https://facebook.com/61558550014957" target="_blank">
                                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968764.png " class="m-3"
                                        width="40" height="40" alt="" title="" class="img-small">
                                    Face Book
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-social"
                                    href="https://www.instagram.com/su.ethiopia57?igsh=d2MwNWdieGx2bWhv&utm_source=qr"
                                    target="_blank">
                                    <img src="https://cdn-icons-png.flaticon.com/512/174/174855.png " class="m-3"
                                        width="40" height="40" alt="" title="" class="img-small">
                                    Instagram
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-social" href="https://t.me/su_ethiopia" target="_blank">
                                    <img src="https://cdn-icons-png.flaticon.com/512/2111/2111646.png " class="m-3"
                                        width="40" height="40" alt="" title="" class="img-small">
                                    Telegram
                                </a>
                            </li>
                            <li class="ps-4">
                                <img src="https://cdn-icons-png.flaticon.com/512/126/126341.png " class="m-3"
                                    width="40" height="40" alt="" title="" class="img-small">
                                <p>Phone Number: +251-11-56-27-86</p>
                            </li>
                            <li class="ps-4">
                                <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png " class="m-3"
                                    width="40" height="40" alt="" title="" class="img-small">
                                <p class="mb-2">Email Addres: info@suethiopia.org</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</x-layouts.app>
