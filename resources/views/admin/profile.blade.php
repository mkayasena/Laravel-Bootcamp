@extends('admin.app')
@section('admin')

<div class="row row-cols-1 row-cols-md-2 g-4">

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

</div>

@endsection