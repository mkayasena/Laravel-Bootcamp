@extends('admin.app')
@section('admin')

<div class="content">
    <div class="row">
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading"><script>document.write(document.title.split('-')[0]);</script>Slider Ekle </h4>
            <hr>
            <p class="mb-0">Aşağıdaki formu kullanarak web sisteminize yeni slider ekleyebilirsiniz.</p>
        </div>

        <div class="card">
            <div class="card-body">

                <form name="add-slider-form" id="add-slider-form" class="row" method="post" autocomplete="off" enctype="multipart/formdata">

                    <div class="d-flex mb-4">
                        <h6 class="card-title mb-0">Slider Ekle</h6>
                    </div>

                    <div class="col-md-12 mb-3 form__img">
                        <label for="form__img-upload">Slider Görseli</label>
                        <input type="file" id="form__img-upload" name="image" class="form-control" accept=".png, .jpg, .jpeg">
                        <img id="form__img" src="#" alt="image">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="title" class="form-label">Slider Başlığı</label>
                        <textarea name="title" id="title" class="form-control"></textarea>
                        <div class="mt-3 text-danger">Lütfen animasyon ile değişmesini istediğiniz kelimeleri çift tırnak ("") içinde yazınız.</div>
                    </div>

                    <input type="hidden" name="user_id" id="user_id" class="form-control" value="1">

                    <div class="col-md-12 d-grid mb-3">
                        <button type="button" name="add-slider-button" id="add-slider-button" class="btn btn-primary">Slider Ekle</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection