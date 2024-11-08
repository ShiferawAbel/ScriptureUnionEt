<x-layouts.app>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center"> 
                <img width="100px" src="{{ asset('storage/'.$request_id->profile) }}" alt="Profile Picture" class="profile-img">
                <h2 class="mt-3">{{ $request_id->full_name_eng }}</h2>
                <p class="text-muted"><strong>UUID:</strong> {{ $request_id->uuid }}</p>
                <div class="text-left mt-4">
                <p class="text-muted"><strong>Job Title:</strong> {{ $request_id->role_eng }}</p>
                <div class="text-left mt-2">
                    <p><strong>Office Address:</strong> {{ $request_id->address_eng }}</p>
                    <p><strong>Phone:</strong> {{$request_id->phone}}</p>
                    <div class="text-center mt-4"> <img src="{{asset('qr_codes/'.str_replace('/', '_', $request_id->uuid).'.png')}}" alt="QR Code"> </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
