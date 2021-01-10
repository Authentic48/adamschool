@extends('layouts.app')

@section('content')
<!-- slider-start -->
<div class="slider-area">
    <div class="page-title">
        <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url({{ asset('assets/img/bg/others_bg.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider-content slider-content-breadcrumb text-center">
                            <h1 class="white-color f-700">О НАС </h1>
                            <nav class="text-center" aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="/">ГЛАВНАЯ </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">О НАС </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider-end -->

<!-- about start -->
<div id="about" class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="about-img mb-55">
                    <img src="{{ asset('assets/img/about/about_details_left_img.jpg')}}" alt="">
                </div>
                <div class="about-title-section about-title-section-2 mb-30">
                    <h1>Who We Are</h1>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad miniveniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea consequatur? Quis autem vel eum iure reprehenderit.</p>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="about-img mb-55">
                    <img src="{{ asset('assets/img/about/about_details_right_img.jpg') }}" alt="">
                </div>
                <div class="about-title-section about-title-section-2 mb-30">
                    <h1>Our MIssion Vission</h1>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptat accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit.</p>
                </div>
            </div>
        </div>
        <div class="row mt-60">
            <div class="col-xl-12">
                <div class="university-banner mb-30">
                    <img src="{{ asset('assets/img/about/university.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about end -->

<!-- counter start -->
<div class="counter-area primary-bg">
    <div class="container pt-90 pb-65">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-3">
                <div class="couter-wrapper couter-wrapper-2 mb-30 text-center">
                    <img src="{{ asset('assets/img/counter/counter_icon1.png')}}" alt="">
                    <span class="counter">300</span>
                    <h3>Ученики</h3>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-3">
                <div class="couter-wrapper couter-wrapper-2 mb-30 text-center">
                    <img src="{{ asset('assets/img/counter/counter_icon3.png')}}" alt="">
                    <span class="counter">290</span>
                    <h3>успешных учеников</h3>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-3">
                <div class="couter-wrapper couter-wrapper-2 mb-30 text-center">
                    <img src="{{ asset('assets/img/counter/counter_icon4.png')}}" alt="">
                    <span class="counter">4</span>
                    <h3>Опыт работы</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- counter end -->

@include('partials.teacher')

@endsection