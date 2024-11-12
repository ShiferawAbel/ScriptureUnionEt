<x-layouts.app>
    <!-- Page Header Start -->
    <div class="container-fluid page-header-annoucment py-5" style="margin-bottom: 6rem; background: linear-gradient(rgba(6, 3, 21, .5), rgba(6, 3, 21, .5)), url({{asset('storage/'.$annoucment->thumbnail)}}) center no-repeat;
">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{ $annoucment->headline }}</h1>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container p-5">
        {{ $annoucment->body }}
    </div>
</x-layouts.app>
