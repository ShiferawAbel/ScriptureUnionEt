<x-layouts.app>
    <div>
        <div class="container  d-flex justify-content-center">
            <div class="card w-50 mt-3">
                <div class="card-body">
                <form action="{{ route('annoucments.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                    <label for="headline">News Headline</label>
                    <input type="text" name="headline" class="form-control" id="headline" placeholder="Enter News Headline" autocomplete="off">
                    </div>
                    
                    <div class="form-group">
                    <label for="body">News Body</label>
                    <textarea name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
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
</x-layouts.app>