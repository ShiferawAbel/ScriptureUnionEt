<x-layouts.app>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center"> 
                <img width="100px" src="{{ asset('storage/'.$request_id->profile) }}" alt="Profile Picture" class="profile-img">
                <h2 class="mt-3"><strong>Full Name:</strong> {{ $request_id->full_name }}</h2>
                <p class="text-muted">UUID: {{ $request_id->uuid }}</p>
                <div class="text-left mt-4">
                <p class="text-muted">Role: {{ $request_id->role }}</p>
                <div class="text-left mt-4">
                    <p><strong>Address:</strong> {{ $request_id->address }}</p>
                    <p><strong>Phone:</strong> +251 123 456 789</p>
                    <div class="text-center mt-4"> <img src="{{asset('qr_codes/'.str_replace('/', '_', $request_id->uuid).'.png')}}" alt="QR Code"> </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
