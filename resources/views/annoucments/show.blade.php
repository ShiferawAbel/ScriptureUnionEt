<x-layouts.app>
    <!-- Page Header Start -->
    <!-- Page Header Start -->
    <div class="story-header">
        <img class="cover-img" src="{{ asset('storage/' . $annoucment->thumbnail) }}" alt="">
        <img class="suLogo" src="{{ asset('img/Asset 3.png') }}" alt="">
        <div class="story-title">
            <h1>{{ $annoucment->headline }}</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="container">
                <p class="p-styled wow fadeInUp" data-wow-delay="0.5">
                    <img style="float: left; width: 40%; margin-right: 20px;height: 250px"
                        src="{{ asset('storage/' . $annoucment->thumbnail) }}" alt="">
                    {!! $annoucment->body !!}
                </p>
            </div>
        </div>
    </div>
</x-layouts.app>
