<x-layouts.admin>
  <div class="container d-flex justify-content-center">
      <div class="card w-50 mt-3">
        <div class="card-body">
          <form autocomplete="off" action="{{ route('admin.requestIds.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="full_name_amh">Full Name In Amharic</label>
              <input type="text" name="full_name_amh" value="{{old('full_name_amh')}}" class="form-control" id="full_name_amh" placeholder="Full Name In Amharic">
              @error('full_name_amh')
                  <p>{{ $message }}</p>
              @enderror
            </div>
            
            <div class="form-group">
              <label for="role_amh">Job Title In Amharic</label>
              <input type="text" name="role_amh" value="{{old('role_amh')}}" class="form-control" id="role_amh" placeholder="Job Title In Amharic">
              @error('role_amh')
                  <p>{{ $message }}</p>
              @enderror
            </div>

            <div class="form-group">
              <label for="address_amh">Address In Amharic</label>
              <input type="text" name="address_amh" value="{{old('address_amh')}}" class="form-control" id="address_amh" placeholder="Address In Amharic">
              @error('address_amh')
                  <p>{{ $message }}</p>
              @enderror
            </div>

            <div class="form-group">
              <label for="full_name_eng">Full Name In English</label>
              <input type="text" name="full_name_eng" value="{{old('full_name_eng')}}" class="form-control" id="full_name_eng" placeholder="Full Name In English">
              @error('full_name_eng')
              <p>{{ $message }}</p>
              @enderror
            </div>

            <div class="form-group">
              <label for="role_eng">Job Title In English</label>
              <input type="text" name="role_eng" value="{{old('role_eng')}}" class="form-control" id="role_eng" placeholder="Job Title In English">
              @error('role_eng')
                  <p>{{ $message }}</p>
              @enderror
            </div>

            <div class="form-group">
              <label for="address_eng">Address In English</label>
              <input type="text" name="address_eng" value="{{old('address_eng')}}" class="form-control" id="address_eng" placeholder="Address In English">
              @error('address_eng')
                  <p>{{ $message }}</p>
              @enderror
            </div>

            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="text" name="phone" value="{{old('phone')}}" class="form-control" id="phone" placeholder="Phone NUmber">
              @error('phone')
                  <p>{{ $message }}</p>
              @enderror
            </div>


            <div class="form-group">
              <label for="prefix">ID NUMBER PREFIX</label>
              <input type="text" name="prefix" value="{{old('prefix')}}" class="form-control" id="prefix" placeholder="ID CARD PREFIX">
              @error('prefix')
                  <p>{{ $message }}</p>
              @enderror
            </div>

            <div class="form-group" id="bannerBox">
              <div class="file-upload">
                <label for="file-input">
                  Choose Profile Picture: 
                  <img id="preview" src="{{asset('img/avatar.png')}}" alt="Choose File">
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
