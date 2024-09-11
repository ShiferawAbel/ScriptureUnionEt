<x-layouts.admin>
  <div>
    <div class="container  d-flex justify-content-center">
        <div class="card w-50 mt-3">
            <div class="card-body">
            <form action="{{ route('admin.carousels.update', $carousel) }}" method="post" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="form-group">
                  <label for="header">Header Of Carousel</label>
                  <input type="text" name="header" value="{{ old('header') ? old('header'): $carousel->header }}" class="form-control" id="headline" placeholder="Enter the header of the carousel" autocomplete="off">
                  @error('header')
                      <p>{{$message}}</p>
                  @enderror
                </div>
                
                <div class="form-group">
                  <label for="body">Enter The Body of the Carousel</label>
                  <input type="text" name="body" class="form-control" value="{{ old('body') ? old('body') : $carousel->body }}" id="body" placeholder="Enter Body Here" autocomplete="off">
                  @error('body')
                      <p>{{$message}}</p>
                  @enderror
                </div>
                
                <div class="form-group" id="bannerBox">
                  <div class="file-upload">
                    <label for="file-input">
                      <img id="preview" src="{{asset($carousel->image)}}" alt="Choose File">
                    </label>
                    <input name="image" id="file-input" type="file">
                  </div>         
                  @error('image')
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
