<x-layouts.admin>
  <div class="newsletter-show w-75">
    <div class="cover-img-container">
      <img src="{{asset('storage/'.$newsletter->cover_img)}}" alt="{{$newsletter->title}}">
    </div>
    <div class="newsletter-desc">
      <h1>{{$newsletter->title}}</h1>
      <p class="newsletter-description">
        {!!$newsletter->description!!}
      </p>
      <div class="text-center ">
        <a href="{{'storage/'.$newsletter->pdf_file}}" class="btn btn-primary py-md-2 px-md-2 me-3 animated slideInLeft">Download</a>
        <a href="{{route('admin.newsletters.edit', $newsletter)}}" class="btn btn-primary py-md-2 px-md-2 me-3 animated slideInLeft">Edit</a>
        <form action="{{route('admin.newsletters.destroy', $newsletter)}}" method="POST">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger py-md-2 px-md-2 me-3 animated slideInLeft">Delete</button>
        </form>
      </div>
    </div>
  </div>
</x-layouts.admin>  