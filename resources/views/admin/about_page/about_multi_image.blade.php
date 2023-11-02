@extends('admin.app')
@section('admin')
<div class="content">
    <div class="row">
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">About Multi Image Page</h4>
            <hr>
            <p class="mb-0">You can update the multi image on your web system using the form below.</p>
        </div>

        <div class="card">
            <div class="card-body">

                <form method="POST" action="{{route('store.multi.image')}}" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id">

                    <div class="d-flex mb-4">
                        <h6 class="card-title mb-0">About Multi Image</h6>
                    </div>

                    <div class="col-md-12 mb-3 form__img">
                        <label for="multi_image"></label>
                        <input type="file" id="multi_image" name="multi_image[]" class="form-control" multiple="">
                        <img src="{{ url('upload/noimage.jpg') }}" class="rounded-pill" alt="multi image">
                    </div>
                    

                    <div class="col-md-12 d-grid mb-3">
                        <button type="submit" class="btn btn-primary">Update About Multi Image</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection