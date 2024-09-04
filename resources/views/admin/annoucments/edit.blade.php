<x-layouts.admin>
    <div>
      <div class="container  d-flex justify-content-center">
          <div class="card w-50 mt-3">
              <div class="card-body">
              <form action="{{ route('admin.annoucments.update', $annoucment) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('patch')
                  <div class="form-group">
                  <label for="headline">News Headline</label>
                  <input type="text" name="headline" class="form-control" id="headline" value="{{ old('headline') ? old('headline') : $annoucment->headline}}" placeholder="Enter News Headline" autocomplete="off">
                  </div>
                  
                  <div class="form-group">
                  <label for="body">News Body</label>
                  <textarea name="body" id="body" class="form-control" cols="30" rows="10">{{ old('body') ? old('body') : $annoucment->body}}</textarea>
                  </div>
                  <div class="form-group" id="bannerBox">
                    <div class="file-upload">
                    <label for="file-input">
                      <img id="preview" src="{{asset($annoucment->thumbnail)}}" alt="Choose File">
                    </label>
                    <input id="file-input" name="thumbnail" type="file">
                  </div>         
                 </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              </div>
          </div>
      </div>
  </div>
      
  </x-layouts.admin>
  