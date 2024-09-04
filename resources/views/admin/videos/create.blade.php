<x-layouts.admin>
  <div>
    <div class="container  d-flex justify-content-center">
        <div class="card w-50 mt-3">
            <div class="card-body">
            <form action="{{ route('admin.videos.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="title">Title of the video</label>
                  <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="headline" placeholder="Enter the title of the video" autocomplete="off">
                  @error('title')
                      <p>{{$message}}</p>
                  @enderror
                </div>
                
                <div class="form-group">
                  <label for="youtubeFrame">Enter the Youtube embed link here</label>
                  <input type="text" name="youtube_iframe" class="form-control" id="youtubeFrame" placeholder="Enter Embed Link Here" autocomplete="off">
                  @error('youtube_iframe')
                      <p>{{$message}}</p>
                  @enderror
                </div>
                
                <div class="form-group" id="bannerBox">
                  <div class="file-upload">
                    <label for="file-input">
                      <img id="preview" src="{{asset('img/avatar.png')}}" alt="Choose File">
                    </label>
                    <input name="thumbnail" id="file-input" type="file">
                  </div>         
                  @error('thumbnail')
                      <p>{{$message}}</p>
                  @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
<script>
  document.getElementById('file-input').addEventListener('change', function() {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
    document.getElementById('preview').src = e.target.result;
  }
    reader.readAsDataURL(file);
  }
  });
</script>
      
</x-layouts.admin>
