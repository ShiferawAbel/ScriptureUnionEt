<x-layouts.admin>
  <div>
    <div class="container  d-flex justify-content-center">
        <div class="card w-50 mt-3">
            <div class="card-body">
            <form action="{{ route('admin.annoucments.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <label for="headline">News Headline</label>
                <input type="text" value="{{ old('headline') }}" name="headline" class="form-control" id="headline" placeholder="Enter News Headline" autocomplete="off" required>
                @error ('headline')
                  <div class="">{{ $message }}</div>
                @enderror
                </div>
                
                <div class="form-group">
                <label for="body">News Body</label>
                <textarea name="body" id="body" class="form-control" cols="30" rows="10" required>{{ old('body') }}</textarea>
                @error ('body')
                  <div class="">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group" id="bannerBox">
                  <div class="file-upload">
                    <label for="file-input">
                      <img id="preview" src="{{asset('img/avatar.png')}}" alt="Choose File">
                    </label>
                    <input id="file-input" name="thumbnail" type="file" required>
                  </div>         
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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
