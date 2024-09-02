<x-layouts.admin>
  <div>
    <div class="container  d-flex justify-content-center">
        <div class="card w-50 mt-3">
            <div class="card-body">
            <form action="{{ route('admin.videos.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <label for="title">Title of the video</label>
                <input type="text" name="title" class="form-control" id="headline" placeholder="Enter the title of the video" autocomplete="off">
                </div>
                
                <div class="form-group">
                <label for="youtubeFrame">Enter the Youtube embed link here</label>
                <input type="text" name="youtube_iframe" class="form-control" id="youtubeFrame" placeholder="Enter Embed Link Here" autocomplete="off">
                </div>
                
                <div class="form-group">
                    <label for="thumbnail">Thumbail for the video</label>
                    <input type="file" name="thumbnail" id="thumbnail" style="display: none;">  <button type="button" class="btn btn-primary" onclick="document.getElementById('thumbnail').click()">Choose Banner</button>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
    
</x-layouts.admin>
