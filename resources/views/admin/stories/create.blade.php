<x-layouts.admin>
  <div class="container d-flex justify-content-center">
      <div class="card w-100 mt-3">
        <div class="card-body">
          <form method="POST" enctype="multipart/form-data" action="{{ route('admin.stories.store') }}">
            @csrf

            <div class="form-group mb-3">
              <label for="Carousel">Share To Carousel</label>
              <input type="checkbox" name="carousel" id="Carousel" placeholder="Enter Carousel">
            </div>
              <label for="title">Title</label>
              <input type="text" name="title" value="{{old('title')}}" class="form-control" id="title" placeholder="Enter title">
              @error('title')
                  <p>{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group mb-3" id="bannerBox">
              <div class="file-upload">
                <label for="file-input">
                Choose Cover Image For The Story: 
                <img id="preview" src="{{asset('img/avatar.png')}}" alt="Choose File">
                </label>
              </div>
              <input id="file-input" name="cover_img" type="file">
              @error('cover_img')
                <p>{{ $message }}</p>
              @enderror
            </div>   
            
            <textarea name="content" id="editor"></textarea>
            
            <div class="form-group mb-3 mt-4" id="bannerBox">
              <label for="images-related">Insert Images Related To Your Story Here: </label>
              <input id="images-related" name="images[]" type="file" multiple>
              @error('images[]')
                <p>{{ $message }}</p>
              @enderror
            </div>   
            

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
  </div>
  <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js">{{old('title')}}</script>

  <script>
    // Initialize CKEditor
    ClassicEditor
        .create(document.querySelector('#editor'),{ ckfinder: {
          uploadUrl: "{{ route('ckeditor.upload', ['_token'=>csrf_token()]) }}"
        }})
        .then(editor => {
            console.log('Editor was initialized', editor);
        })
        .catch(error => {
            console.error('Error during initialization of the editor', error);
        });

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
