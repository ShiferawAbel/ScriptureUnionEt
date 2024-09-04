<x-layouts.admin>
    <div class="container d-flex justify-content-center">
        <div class="card w-50 mt-3">
          <div class="card-body">
            <form autocomplete="off" action="{{ route('admin.events.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="event_name">Event Name</label>
                <input type="text" name="event_name" value="{{old('event_name')}}" class="form-control" id="event_name" placeholder="Enter event name">
                @error('event_name')
                    <p>{{ $message }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="location-input">Location</label>
                <input type="text" name="location" class="form-control" value="{{old('location')}}" id="location-input" placeholder="Enter location">
                @error('location')
                    <p>{{ $message }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="start_date_time">Start Date & Time</label>
                <input type="datetime-local" name="start_date_time" class="form-control" value="{{old('start_date_time')}}" id="start_date_time">
                @error('start_date_time')
                  <p>{{ $message }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="end_date_time">End Date & Time</label>
                <input type="datetime-local" name="end_date_time" class="form-control"value="{{old('end_date_time')}}" id="end_date_time">
                @error('end_date_time')
                  <p>{{ $message }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{old('description')}}</textarea>
                @error('description')
                  <p>{{ $message }}</p>
                @enderror
              </div>
              <div class="form-group" id="bannerBox">
                <div class="file-upload">
                  <label for="file-input">
                    <img id="preview" src="{{asset('img/avatar.png')}}" alt="Choose File">
                </label>
                <input id="file-input" name="banner_img" type="file">
                @error('banner_img')
                  <p>{{ $message }}</p>
                @enderror
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
