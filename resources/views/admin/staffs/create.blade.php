<x-layouts.admin>
  <form action="{{route('admin.staffs.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="first_name" placeholder="First Name">
    <input type="text" name="last_name" placeholder="Last Name">
    <input type="text" name="role" placeholder="Role At SU">
    <input type="file" name="profile_img">
    <input type="submit" value="Submit">
  </form>
</x-layouts.admin>