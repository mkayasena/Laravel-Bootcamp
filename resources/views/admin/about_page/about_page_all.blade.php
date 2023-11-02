@extends('admin.app')
@section('admin')
<div class="content">
    <div class="row">
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Update About Page</h4>
            <hr>
            <p class="mb-0">You can update the slider on your web system using the form below.</p>
        </div>

        <div class="card">
            <div class="card-body">

                <form method="POST" action="{{route('upload.about')}}" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{$aboutPage->id}}">

                    <div class="d-flex mb-4">
                        <h6 class="card-title mb-0">About Image</h6>
                    </div>

                    <div class="col-md-12 mb-3 form__img">
                        <label for="about_image"></label>
                        <input type="file" id="about_image" name="about_image" class="form-control">
                        <img src="{{ (!empty($aboutPage->about_image)?url($aboutPage->about_image):url('upload/noimage.jpg')) }}" class="rounded-pill" alt="about image">
                    </div>

                    <div class="d-flex gap-1">
                        <div class="col-md-6 mb-3">
                            <label for="title" class="form-label">About Title</label>
                            <input type="text" name="title" id="title" value="{{$aboutPage->title}}" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="sub_title" class="form-label">About Sub Title</label>
                            <input type="text" name="sub_title" id="sub_title" value="{{$aboutPage->sub_title}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="description" class="form-label">About Description</label>
                        <div id="editor" name="description" class="form-control">{{$aboutPage->description}}</div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="sub_description" class="form-label">About Sub Description</label>
                        <textarea name="sub_description" id="sub_description" class="form-control">{{$aboutPage->sub_description}}</textarea>
                    </div>

                    <div class="col-md-12 d-grid mb-3">
                        <button type="submit" class="btn btn-primary">Update About Page</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection