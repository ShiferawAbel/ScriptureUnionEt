<x-layouts.app>
  @section('meta_title', $meta_data['title'])
  @section('meta_description', $meta_data['description'])
  @section('meta_keywords', $meta_data['keywords'])
  @section('meta_author', $meta_data['author'])
  @section('meta_canonical', $meta_data['canonical'])
  @section('meta_og_title', $meta_data['og_title'])
  @section('meta_og_description', $meta_data['og_description'])
  @section('meta_og_image', $meta_data['og_image'])
  @section('meta_og_url', $meta_data['og_url'])
  @section('meta_og_type', $meta_data['og_type'])
  @section('meta_twitter_card', $meta_data['twitter_card'])
  @section('meta_twitter_title', $meta_data['twitter_title'])
  @section('meta_twitter_description', $meta_data['twitter_description'])
  @section('meta_twitter_image', $meta_data['twitter_image'])
  @section('meta_twitter_site', $meta_data['twitter_site'])

  <!-- Page Header Start -->
  <div class="story-header">
      <img class="cover-img" src="{{ asset('storage/'.$story->cover_img) }}" alt="">
      <img class="suLogo" src="{{ asset('img/Asset 3.png') }}" alt="">
      <div class="story-title">
          <h1>{{ $story->title }}</h1>
      </div>
  </div>
  <!-- Page Header End -->

  <div class="container">
      {!! $story->content !!}
  </div>
  <div class="container-fluid p-0" style="background-color: #2e97c4;">
      <div class="owl-carousel header-carousel position-relative">
          @foreach ($story->images as $image)
              <div class="owl-carousel-item position-relative">
                  <img class="img-fluid" src="{{ asset('storage/' . $image->image) }}" alt="{{ $story->title }}" style="width: 50%; height: auto; object-fit: contain; margin: auto;">
              </div>
          @endforeach
      </div>
  </div>
</x-layouts.app>
