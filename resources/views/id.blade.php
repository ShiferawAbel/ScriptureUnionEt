<x-layouts.app>
  <div class="w-50 text-center m-auto mt-5">

    <img width="100px" style="border-radius: 100%" src="{{asset('storage/'.$request_id->profile)}}" alt="">
    <p>First Name: {{$request_id->full_name}}</p>
    <p>Role At SU: {{$request_id->role}}</p>
    <img src="{{ asset('id_cards/' . str_replace('/', '_' , $request_id->uuid)) }}" alt="QR Code">
  </div>
</x-layouts.app>