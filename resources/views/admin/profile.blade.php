@extends('admin.app')
@section('admin')

{{-- <div class="row row-cols-1 row-cols-md-2 g-4">

    <div class="col-xl-4">
      <div class="card">
        <img src="{{asset('backend/images/profile')}}/profile.jpg" alt="profile">
        <div class="card-body">
          <p class="card-title"><b>Name:</b> <span>{{$adminData->name}}</span></p>
          <p class="card-text"><b>E-mail:</b> <span>{{$adminData->email}}</span></p>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <small class="text-muted">Card Footer</small>
            <a href=""><small class="text-muted">Edit Profile</small></a>
        </div>
      </div>
    </div>

</div> --}}

<div class="row page-titles">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"><a href="javascript:void(0)">App /</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
  </ol>
</div>

<div class="profile-cover bg-image mb-4">
  <div class="container d-flex align-items-center justify-content-center h-100 flex-column flex-md-row text-center text-md-start">
      <div class="avatar avatar-xl me-3">
          <img src="{{ (!empty($adminData->profile_image)?url('upload/user_images/'.$adminData->profile_image):url('upload/no_image.jpg')) }}" class="rounded-circle" alt="profileImage">
      </div>
      <div class="d-flex flex-column my-4 my-md-0">
          <h3 class="mb-1 text-capitalize">{{$adminData->name}}</h3>
          <small>Full Stack Web Developer</small>
          <small>{{$adminData->email}}</small>
      </div>
      <div class="ms-md-auto">
          <a href="{{route('edit.profile')}}" class="btn btn-primary btn-lg btn-icon">
              <i class="bi bi-pencil small"></i> Edit Profile
          </a>
      </div>
  </div>
</div>

@endsection