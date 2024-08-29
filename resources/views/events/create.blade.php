<x-layouts.app>
    <div class="container  d-flex justify-content-center">
      <div class="card w-50 mt-3">
        <div class="card-body">
          <form autocomplete="off" action="{{ route('events.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="event_name">Event Name</label>
              <input type="text" name="event_name" class="form-control" id="event_name" placeholder="Enter event name">
            </div>
            <div class="form-group">
              <label for="location">Location</label>
              <input type="text" name="location" class="form-control" id="location" placeholder="Enter location">
            </div>
            <div class="form-group">
              <label for="start_date_time">Start Date & Time</label>
              <input type="datetime-local" name="start_date_time" class="form-control" id="start_date_time">
            </div>
            <div class="form-group">
              <label for="end_date_time">End Date & Time</label>
              <input type="datetime-local" name="end_date_time" class="form-control" id="end_date_time">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="banner_img">Banner Image</label>
                <input type="file" name="banner_img" id="banner_img" style="display: none;">  <button type="button" class="btn btn-primary" onclick="document.getElementById('banner_img').click()">Choose Banner</button>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </x-layouts.app>
  