<x-layouts.app>

    @if (count($events) !== 0)
        @php
            $start_date_time = str_replace(' ', ' @ ', $next_event->start_date_time);
            $end_date_time = str_replace(' ', ' @ ', $next_event->end_date_time);
            $description = substr($next_event->description, 0, 400) . '...';
        @endphp
        <div class="d-flex">
            <div class="container">
                <div class="upcoming">
                    <div class="card">
                        <div class="card-img-upcoming position-relative">
                            <img class="card-img" style="width: 50%; height: 418px;"
                                src="{{ asset('storage/' . $next_event->banner_img) }}">
                        </div>
                        <div class="card-body upcoming-detail">
                            <span class="card-banner">Next Event</span>
                            <h3 class="upcoming-title m-0">{{ $next_event->event_name }}</h3>
                            <div class="card-content m-0">
                                <p><span class="h5 text-white">Start Date:</span> {{ $start_date_time }}</p>
                                <p><span class="h5 text-white">End Date:</span> {{ $end_date_time }}</p>
                                <p><span class="h5 text-white">Description:</span> {{ $description }}</p>
                            </div>
                            <div class="card-action">
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i>{{ $next_event->location }}
                                </p>
                                <a href="{{ route('events.show', $next_event) }}">Read More</a>
                                <span class="released-date">9min ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container py-5">
                <div class="row g-4">
                    @foreach ($events as $event)
                        @php
                            $start_date_time = str_replace(' ', ' @ ', $event->start_date_time);
                            $end_date_time = str_replace(' ', ' @ ', $event->end_date_time);
                            $description = substr($event->description, 0, 100) . '...';
                        @endphp
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item">
                                <div class="overflow-hidden mb-4">
                                    <img class="img-fluid events-banner"
                                        src="{{ asset('storage/' . $event->banner_img) }}" alt="">
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">{{ $event->event_name }}</h4>
                                    <p><span class="h5">Start Date:</span> {{ $start_date_time }}</p>
                                    <p><span class="h5">End Date:</span> {{ $end_date_time }}</p>
                                    <p><span class="h5">Description:</span> {{ $description }}</p>
                                    <a class="btn-slide mt-2" href="{{ route('events.show', $event->slug) }}"><i
                                            class="fa fa-arrow-right"></i><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endif
</x-layouts.app>
