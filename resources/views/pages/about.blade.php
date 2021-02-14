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
            <div class="col-xl-12 col-lg-12">
                <div class="about-img mb-55">
                    <img src="{{ asset('assets/img/adam5.jpeg')}}" alt="">
                </div>
                <div class="about-title-section about-title-section-2 mb-30">
                    <h1>Добро пожаловать в AdamSchool </h1>
                    <p>Школа AdamSchool преподаёт английский и французский язык.Опыт работы четыре года,более трёхсот успешных учеников.Для Вас преподают профессионалы и носители языка из зарубежных стран.Занятия проводятся в режиме онлайн на платформе Zoom или Skype,у вас на дому,в учебной аудитории преподавателя.
                        Стоимость занятий начинается от 700 рублей.
                        P.s.Если у вас огромное желание и вы очень активны в изучении языка,вполне достаточно 6 месяцев,для изучения,чтобы за границей иностранцы приняли вас за своих!</p>
                </div>
            </div>
        </div>
        <div class="row mt-60">
            <div class="col-xl-12">
                <div class="university-banner mb-30">
                    <img src="{{ asset('assets/img/adam1.jpeg')}}" alt="">
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
                    <span class="counter">3</span>
                    <h3>Опыт работы</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- counter end -->

@endsection