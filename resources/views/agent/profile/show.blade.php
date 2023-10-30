@extends('agent.base')
@section('content')
    <div class="row profile-body">
        <!-- left wrapper start -->
        <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
            <div class="card rounded">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">

                        <div>
                            <img class="wd-100 rounded-circle"
                                src="{{ !empty($profileData->photo) ? url('agent/images/' . $profileData->photo) : url('upload/no_image.jpg') }}"
                                alt="profile">
                            <span class="h4 ms-3">{{ $profileData->name }}</span>
                        </div>

                        <div class="dropdown">


                            </a>

                        </div>
                    </div>

                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
                        <p class="text-muted">{{ $profileData->name }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                        <p class="text-muted">{{ $profileData->email }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                        <p class="text-muted">{{ $profileData->phone }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                        <p class="text-muted">{{ $profileData->address }}</p>
                    </div>
                    <div class="mt-3 d-flex social-links">
                        <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                            <i data-feather="github"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                            <i data-feather="twitter"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                            <i data-feather="instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- left wrapper end -->
        <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">Update Your Profile</h6>

                        <form method="post" action="{{ route('agent.update') }}" class="form-sample"
                            enctype="multipart/form-data">

                            @csrf
                            @method('patch')

                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="username" autocomplete="off"
                                    value="{{ $profileData->username }}">
                                @error('username')
                                    <span style="color: red !important;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="name" autocomplete="off"
                                    value="{{ $profileData->name }}">
                                @error('name')
                                    <span style="color: red !important;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" id="email" autocomplete="off"
                                    value="{{ $profileData->email }}">
                                @error('email')
                                    <span style="color: red !important;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="facebook" class="form-label">Facebook</label>
                                <input type="text" name="facebook" class="form-control" id="facebook" autocomplete="off"
                                    value="{{ $profileData->facebook }}">
                                @error('facebook')
                                    <span style="color: red !important;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="instagram" class="form-label">Instagram</label>
                                <input type="text" name="instagram" class="form-control" id="instagram"
                                    autocomplete="off" value="{{ $profileData->instagram }}">
                                @error('instagram')
                                    <span style="color: red !important;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="twitter" class="form-label">Twitter</label>
                                <input type="text" name="twitter" class="form-control" id="twitter" autocomplete="off"
                                    value="{{ $profileData->twitter }}">
                                @error('twitter')
                                    <span style="color: red !important;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" id="phone"
                                    autocomplete="off" value="{{ $profileData->phone }}">
                                @error('phone')
                                    <span style="color: red !important;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" id="address"
                                    autocomplete="off" value="{{ $profileData->address }}">
                                @error('address')
                                    <span style="color: red !important;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="bio" class="form-label">Bio</label>
                                <textarea name="bio" id="" cols="30" rows="10" class="form-control">
                                {{ $profileData->bio }}
                               </textarea>
                                @error('bio')
                                    <span style="color: red !important;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="photo" class="form-label">Photo</label>
                                <input class="form-control" name="photo" type="file" id="image">
                            </div>

                            <div class="mb-3">
                                <label for="photo" class="form-label">Photo</label>
                                <img class="wd-100 rounded-circle"
                                    src="{{ !empty($profileData->photo) ? url('agent/images/' . $profileData->photo) : url('upload/no_image.jpg') }}"
                                    alt="profile">
                                @error('photo')
                                    <span style="color: red !important;">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                            <button class="btn btn-secondary">Cancel</button>
                        </form>

                    </div>
                </div>
                <div class="ms-2">

                </div>
            </div>




        </div>
    </div>
    </div>
    </div>

    </div>
    <div class="card-footer">


    </div>
    </div>
    </div>
    </div>
    <div class="col-md-12">


    </div>
    <div class="dropdown">

    </div>
    </div>
    </div>
    </div>
    <div class="card-body">

    </div>

    </div>
    </div>
    <!-- middle wrapper end -->
    <!-- right wrapper start -->

    <!-- right wrapper end -->
    </div>
@endsection
