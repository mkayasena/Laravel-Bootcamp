@php
    $homeSlide = App\Models\homeSlide::find(1);
@endphp

<section class="banner">
    <div class="container custom-container">
        <div class="row align-items-center justify-content-center justify-content-lg-between">
            <div class="col-lg-6 order-0 order-lg-2">
                <div class="banner__img text-center text-xxl-end">
                    <img src="{{$homeSlide->image}}" alt="">
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="banner__content">
                    <h2 class="title wow fadeInUp" data-wow-delay=".2s">{{$homeSlide->title}}</h2>
                    <p class="wow fadeInUp" data-wow-delay=".4s">{{$homeSlide->description}}</p>
                    <a href="about.html" class="btn banner__btn wow fadeInUp" data-wow-delay=".6s">more about me</a>
                </div>
            </div>
        </div>
    </div>
    <div class="banner__video">
        <a href="{{$homeSlide->button_url}}" class="popup-video"><i class="fas fa-play"></i></a>
    </div>
    <nav class="switcher__tab">
        <span class="switcher__tab__btn light__mode__title">Light</span>
        <span class="mode__switcher"></span>
        <span class="switcher__tab__btn dark__mode__title">Dark</span>
    </nav>
</section>