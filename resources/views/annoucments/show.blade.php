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
            <div class="container"> <p class="p-styled">{!! $annoucment->body !!}</p> </div>
            <div class="col-12"> <img class="img-fluid w-50" src="{{ asset('storage/' . $annoucment->thumbnail) }}"
                    alt="Announcement Image"> </div>
        </div>
    </div>
</x-layouts.app>
