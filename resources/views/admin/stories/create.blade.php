<x-layouts.admin>
  <div class="container d-flex justify-content-center">
      <div class="card w-100 mt-3">
        <div class="card-body">
          <form method="POST" action="{{ route('admin.stories.store') }}">
            @csrf
            <input type="text" name="title">
            <textarea name="content" id="editor"></textarea>
            <button type="submit">Submit</button>
          </form>
        </div>
      </div>
  </div>
  <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

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
  </script>
  
</x-layouts.admin>
