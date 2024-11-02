<x-layouts.admin>
  <div class="container d-flex justify-content-center">
      <div class="card w-50 mt-3">
        <div class="card-body">
          <form autocomplete="off" action="{{ route('admin.requestIds.update', $request_id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group">
              <label for="full_name">Full Name</label>
              <input type="text" name="full_name" value="{{old('full_name') ? old('full_name') : $request_id->full_name}}" class="form-control" id="full_name" placeholder="Full Name">
              @error('full_name')
                  <p>{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="text" name="phone" value="{{old('phone') ? old('phone') : $request_id->phone}}" class="form-control" id="phone" placeholder="Phone NUmber">
              @error('phone')
                  <p>{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="role">Role</label>
              <input type="text" name="role" value="{{old('role') ? old('role') : $request_id->role}}" class="form-control" id="role" placeholder="Role">
              @error('role')
                  <p>{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" name="address" value="{{old('address') ? old('address') : $request_id->address}}" class="form-control" id="address" placeholder="Address">
              @error('address')
                  <p>{{ $message }}</p>
              @enderror
            </div>

            <div class="form-group" id="bannerBox">
              <div class="file-upload">
                <label for="file-input">
                  Choose Profile Picture: 
                  <img id="preview" src="{{asset('storage/'.$request_id->profile)}}" alt="Choose File">
              </label>
              <input id="file-input" name="profile" type="file">
              @error('profile')
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
