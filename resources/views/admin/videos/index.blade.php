<x-layouts.admin>
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Videos</h1>
        </div>
    </div>
    <div class="container row">
        @foreach ($videos as $video)
            <div class="col-md-4 upcoming-event">
                <a href="{{ route('admin.videos.show', $video->slug) }}">
                    <div class="card upcoming-event">
                        <div class="card-image">
                            <img class="card-img-top" src="{{ asset('storage/' . $video->thumbnail) }}">
                        </div>
                        <div class="card-body">
                            <div class="card-content">
                                <p class="text-dark">{{ $video->title }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</x-layouts.admin>
