<x-layouts.app>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{ $annoucment->headline }}</h1>
        </div>
    </div>
    <!-- Page Header End -->
    <div>{{ $annoucment->body }}</div>
</x-layouts.app>