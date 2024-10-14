<x-layouts.app>
  <div class="newsletter-show">
    <div class="cover-img-container">
      <img src="{{asset('storage/'.$newsletter->cover_img)}}" alt="{{$newsletter->title}}">
    </div>
    <div class="newsletter-desc">
      <h1>{{$newsletter->title}}</h1>
      <p class="newsletter-description">
        {!!$newsletter->description!!}
      </p>
      <div class="text-center ">
        <a href="{{'storage/'.$newsletter->pdf_file}}" class="btn btn-primary py-md-2 px-md-5 me-3 animated slideInLeft">Download</a>

      </div>
    </div>
  </div>
</x-layouts.app>