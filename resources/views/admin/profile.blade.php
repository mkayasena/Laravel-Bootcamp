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

<div class="profile-cover bg-image mb-4" style="background: url(../{{asset('backend/images/profile-bg.jpg')}});">
  <div class="container d-flex align-items-center justify-content-center h-100 flex-column flex-md-row text-center text-md-start">
      <div class="avatar avatar-xl me-3">
          <img src="{{asset('backend/images/profile')}}/profile.jpg" class="rounded-circle" alt="...">
      </div>
      <div class="my-4 my-md-0">
          <h3 class="mb-1">Timotheus Bendan</h3>
          <small>Accountant</small>
      </div>
      <div class="ms-md-auto">
          <a href="settings.html" class="btn btn-primary btn-lg btn-icon">
              <i class="bi bi-pencil small"></i> Edit Profile
          </a>
      </div>
  </div>
</div>

@endsection