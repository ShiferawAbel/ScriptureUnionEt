<x-layouts.admin>
    <div class="container  d-flex justify-content-center">
        <div class="card w-50 mt-3">
          <div class="card-body">
            <form action="{{ route('admin.events.update', $event) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('patch') 
              <div class="form-group">
                <label for="event_name">Event Name</label>
                <input type="text" name="event_name" class="form-control" id="event_name" value="{{$event->event_name ? $event->event_name : ''}}" placeholder="Enter event name">
              </div>
              <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" class="form-control" value="{{$event->location ? $event->location : ''}}" id="location" placeholder="Enter location" autocomplete="home city">
              </div>
              <div class="form-group">
                <label for="start_date_time">Start Date & Time</label>
                <input type="datetime-local" name="start_date_time" value="{{$event->start_date_time ? $event->start_date_time : ''}}" class="form-control" id="start_date_time">
              </div>
              <div class="form-group">
                <label for="end_date_time">End Date & Time</label>
                <input type="datetime-local" name="end_date_time" value="{{$event->end_date_time ? $event->end_date_time : ''}}" class="form-control" id="end_date_time">
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{$event->description ? $event->description : ''}}</textarea>
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
    
</x-layouts.admin>