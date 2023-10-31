@php
    $data = App\Models\User::find(Auth::user()->id);
@endphp

@extends('admin.app')
@section('admin')

<div class="content">
    <div class="row flex-column-reverse flex-md-row">
        <div class="col-md-8">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form method="POST" action="{{route('store.profile')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <div class="d-flex flex-column flex-md-row text-center text-md-start mb-3">
                                <figure class="me-4 flex-shrink-0">
                                    <img src="{{ (!empty($data->profile_image)?url('upload/user_images/'.$data->profile_image):url('upload/no_image.jpg')) }}" class="rounded-pill" id="profileImage" alt="profile"  width="100px">
                                </figure>
                                <div class="mt-3">
                                    <h5 class="text-capitalize">sena kaya</h5>
                                    <p class="small text-muted mt-3">You can change your password in this area.</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade show active" id="password" role="tabpanel" aria-labelledby="password-tab">
                    @if(count($errors)> 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title mb-4">Change Password</h6>
                                <form method="POST" action="{{route('update.profile')}}">
                                    @csrf
                                <div class="mb-3">
                                    <label class="form-label">Old Password</label>
                                    <input type="password" id="old_password" name="old_password" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">New Password</label>
                                    <input type="password" id="new_password" name="new_password" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 mx-3">
                                <button type="submit" class="btn btn-primary">Change Password</button>
                            </div>
                            </form>
                        </div>
                    
                </div>
                
               
            </div>
        </div>
        <div class="col-md-4">
            <div class="card sticky-top mb-4 mb-md-0">
                <div class="card-body">
                    <ul class="nav nav-pills flex-column gap-2" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" href="{{route('edit.profile')}}">
                                <i class="bi bi-person me-2"></i> Profile
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="password-tab" href="{{route('change.password')}}">
                                <i class="bi bi-lock me-2"></i> Password
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection