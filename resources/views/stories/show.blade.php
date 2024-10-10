<x-layouts.app>
  <!-- Page Header Start -->
  <div class="container page-header-about page-header py-5" style="margin-bottom: 6rem;">
      <div class="container py-5">
          <h1 class="display-3 text-white mb-3 animated slideInDown">{{ $story->title }}</h1>
      </div>
  </div>
  <!-- Page Header End -->
  
  <div class="container">
    {!! $story->content !!}
  </div>
  
</x-layouts.app>