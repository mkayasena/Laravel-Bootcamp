@extends('admin.app')
@section('admin')

<div class="content">
    <div class="row">
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Update Slider</h4>
            <hr>
            <p class="mb-0">You can update the slider on your web system using the form below.</p>
        </div>

        <div class="card">
            <div class="card-body">

                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex mb-4">
                        <h6 class="card-title mb-0">Slider Image</h6>
                    </div>

                    <div class="col-md-12 mb-3 form__img">
                        <label for="form__img-upload">Slider Image</label>
                        <input type="file" id="form__img-upload" name="image" class="form-control" accept=".png, .jpg, .jpeg" value="{{$homeSlider->image}}">
                        <img src="{{ (!empty($homeSlider->image)?url('upload/home_slider/'.$homeSlider->image):url('upload/noimage.jpg')) }}" class="rounded-pill" alt="image"  width="100px">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="title" class="form-label">Slider Title</label>
                        <input type="text" name="title" id="title" value="{{$homeSlider->title}}" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="description" class="form-label">Slider Description</label>
                        <textarea name="description" id="description" class="form-control">{{$homeSlider->description}}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="button_url" class="form-label">Slider Button Link</label>
                        <input type="text" name="button_url" id="button_url" value="{{$homeSlider->button_url}}" class="form-control">
                    </div>

                    <input type="hidden" name="user_id" id="user_id" class="form-control" value="1">

                    <div class="col-md-12 d-grid mb-3">
                        <button type="button" name="add-slider-button" id="add-slider-button" class="btn btn-primary">Update Slider</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection