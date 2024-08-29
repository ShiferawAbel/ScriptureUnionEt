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
                  <input type="text" name="headline" class="form-control" id="headline" value="{{ $annoucment->headline ? $annoucment->headline : '$annoucment->headline'}}" placeholder="Enter News Headline" autocomplete="off">
                  </div>
                  
                  <div class="form-group">
                  <label for="body">News Body</label>
                  <textarea name="body" id="body" class="form-control" cols="30" rows="10">{{ $annoucment->headline ? $annoucment->headline : '$annoucment->headline'}}</textarea>
                  </div>
                  <div class="form-group">
                      <label for="thumbnail">Banner Image</label>
                      <input type="file" name="thumbnail" id="thumbnail" style="display: none;">  <button type="button" class="btn btn-primary" onclick="document.getElementById('thumbnail').click()">Choose Banner</button>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              </div>
          </div>
      </div>
  </div>
      
  </x-layouts.admin>
  