<x-layouts.admin>
    <div class="container d-flex justify-content-center">
        <div class="card w-75 mt-3">
            <div class="card-body">
                <form autocomplete="off" action="{{ route('admin.requestIds.update', $request_id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="full_name_amh">Full Name In Amharic</label>
                                    <input type="text" name="full_name_amh"
                                        value="{{ old('full_name_amh', $request_id->full_name_amh) }}"
                                        class="form-control" id="full_name_amh" placeholder="Full Name In Amharic">
                                    @error('full_name_amh')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="role_amh">Job Title In Amharic</label>
                                    <input type="text" name="role_amh"
                                        value="{{ old('role_amh', $request_id->role_amh) }}" class="form-control"
                                        id="role_amh" placeholder="Job Title In Amharic">
                                    @error('role_amh')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="office_address_amh">Office Address In Amharic</label>
                                    <input type="text" name="office_address_amh"
                                        value="{{ old('office_address_amh', $request_id->office_address_amh) }}" class="form-control"
                                        id="office_address_amh" placeholder="Office Address In Amharic">
                                    @error('office_address_amh')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nationality_amh">Nationality In Amharic</label>
                                    <input type="text" name="nationality_amh"
                                        value="{{ old('nationality_amh', $request_id->nationality_amh) }}" class="form-control"
                                        id="nationality_amh" placeholder="Nationality In Amharic">
                                    @error('nationality_amh')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="full_name_eng">Full Name In English</label>
                                    <input type="text" name="full_name_eng"
                                        value="{{ old('full_name_eng', $request_id->full_name_eng) }}"
                                        class="form-control" id="full_name_eng" placeholder="Full Name In English">
                                    @error('full_name_eng')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="role_eng">Job Title In English</label>
                                    <input type="text" name="role_eng"
                                        value="{{ old('role_eng', $request_id->role_eng) }}" class="form-control"
                                        id="role_eng" placeholder="Job Title In English">
                                    @error('role_eng')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="office_address_eng">Office Address In English</label>
                                    <input type="text" name="office_address_eng"
                                        value="{{ old('office_address_eng', $request_id->office_address_eng) }}" class="form-control"
                                        id="office_address_eng" placeholder="Office Address In English">
                                    @error('office_address_eng')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nationality_eng">Nationality In English</label>
                                    <input type="text" name="nationality_eng"
                                        value="{{ old('nationality_eng', $request_id->nationality_eng) }}" class="form-control"
                                        id="nationality_eng" placeholder="Nationality In English">
                                    @error('nationality_eng')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" name="phone" value="{{ old('phone', $request_id->phone) }}"
                                        class="form-control" id="phone" placeholder="Phone Number">
                                    @error('phone')
                                        <p>{{ $message }}</p>
                                    @enderror
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group" id="bannerBox">
                                    <div class="file-upload">
                                        <label for="file-input">Choose Profile Picture:</label>
                                        <img id="preview" src="{{ asset('storage/' . $request_id->profile) }}"
                                            alt="Choose File" class="img-thumbnail">
                                        <input id="file-input" name="profile" type="file">
                                        @error('profile')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
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
