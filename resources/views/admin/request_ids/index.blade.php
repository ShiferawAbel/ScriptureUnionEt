<x-layouts.admin>
  <div class="w-100" id="container-wrapper">
    <!-- Invoice Example -->
    <div class="col mb-4">
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h4 class="m-0 font-weight-bold text-primary">ID's</h4>
                <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('admin.requestIds.create') }}">Make And Id Request</a>

                <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('admin.requestIds.create') }}">Download All Ids As Pdf</a>
            </div>
            <div class="table-responsive row">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light ">
                        <tr>
                            <th class="col-3">UUID</th>
                            <th class="col-3">Full Name</th>
                            <th class="col-2">Photo</th>
                            <th class="col-2">Role</th>
                            <th class="col-1">Address</th>
                            <th class="col-1"></th>
                            <th class="col-1"></th>
                            {{-- <th class="col-2">Rating</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($request_ids as $request_id)
                          <tr>
                            <td class="col-3"> <a href="{{ route('admin.requestIds.show', $request_id) }}" > <h3 style="">{{$request_id->uuid }} </h3> </a> </td>
                            <td class="col-3"> <h5 style="">{{$request_id->full_name }} </h5></td>
                            <td class="col-1"> <img width="100px" src="{{ asset('storage/'.$request_id->profile) }}" alt=""> </td>
                            <td class="col-2"> <h5 style="">{{$request_id->role }} </h5></td>
                            <td class="col-1"> <h5 style="">{{$request_id->address}} </h5></td>
                            <td class="col-2"> <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('downloadId', $request_id) }}">Download Id Card</a> </td>
                            </td>                            
                            <td class="col-2"> <a class="m-0 float-right btn btn-secondary btn-sm" href="{{ route('admin.requestIds.edit', $request_id) }}" disable>Edit</a> </td>
                            </td>                            
                          </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>
</x-layouts.admin>
