<x-layouts.app>
  <div class="w-50 text-center m-auto mt-5">

    <img width="100px" style="border-radius: 100%" src="{{asset('storage/'.$staff->profile_img)}}" alt="">
    <p>First Name: {{$staff->first_name}}</p>
    <p>Last Name: {{$staff->last_name}}</p>
    <p>Role At SU: {{$staff->role}}</p>
    {!! QrCode::size(200)->generate(url()->current()) !!}
  </div>
</x-layouts.app>