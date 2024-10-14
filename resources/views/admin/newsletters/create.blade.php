<x-layouts.admin>
  <div>
    <div class="container  d-flex justify-content-center">
        <div class="card w-50 mt-3">
            <div class="card-body">
              <form action="{{route('admin.newsletters.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="title">Title of the News Letter</label>
                  <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="headline" placeholder="Enter the title of the video" autocomplete="off">
                  @error('title')
                      <p>{{$message}}</p>
                  @enderror
                </div>
                <label for="editor">Short Descritption</label>
                <textarea name="description" id="editor" name="description"></textarea>
                <div class="form-group mb-3" id="bannerBox">
                  <div class="file-upload">
                    <label for="cover-img">
                      <img id="preview" src="{{asset('img/avatar.png')}}" alt="Choose File">
                    </label>
                  </div>
                  <input id="cover-img" name="cover_img" type="file">
                  @error('cover_img')
                    <p>{{ $message }}</p>
                  @enderror
                </div>   
                <input id="pdf-file" name="pdf_file" type="file">
                <button class="submit">Submit</button>
              </form>

              
            </div>
          </div>
        </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js">{{old('title')}}</script>

<script>
  // Initialize CKEditor
  ClassicEditor
  .create(document.querySelector('#editor'));

  document.getElementById('cover-img').addEventListener('change', function() {
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
