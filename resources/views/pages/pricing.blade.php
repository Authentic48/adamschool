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
                            <h1 class="white-color f-700">Цены</h1>
                            <nav class="text-center" aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="/">ГЛАВНАЯ </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Цены</li>
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

 <!-- courses start -->
 <div class="courses-area courses-bg-height gray-bg pt-100 pb-70">
    <div class="container">
        <div class="courses-list">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="courses-wrapper mb-30">
                        <div class="courses-content courses-content-2 text-center">
                            <div class="courses-thumb">
                                <img src="{{ asset('assets/img/courses/coursesthumb001.jpg')}}" alt="">
                            </div>
                            <div class="courses-heading text-center">
                                <h1>Занятия в группах</h1>
                            </div>
                            <div class="courses-icon text-center">
                                <div class="courses-single-icon courses-single-icon-2">
                                    <span class="price">Цена</span>
                                    <span class="user-number">1000/Ч.</span>
                                </div>
                                <div class="courses-single-icon courses-single-icon-2">
                                    <span class="ti-user"></span>
                                    <span class="seat">Студенты</span>
                                    <span class="user-number">4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="courses-wrapper mb-30">
                        <div class="courses-content courses-content-2 text-center">
                            <div class="courses-thumb">
                            <img src="{{ asset('assets/img/courses/coursesthumb002.jpg')}}" alt="">
                            </div>
                            <div class="courses-heading text-center">
                                <h1>Подготовка к IELTS/TOEFL</h1>
                            </div>
                            <div class="courses-icon text-center">
                                <div class="courses-single-icon courses-single-icon-2">
                                    <span class="price">Цена</span>
                                    <span class="user-number">1000/Ч.</span>
                                </div>
                                <div class="courses-single-icon courses-single-icon-2">
                                    <span class="ti-user"></span>
                                    <span class="seat">Студент</span>
                                    <span class="user-number">1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="courses-wrapper mb-30">
                        <div class="courses-content courses-content-2 text-center">
                            <div class="courses-thumb">
                            <img src="{{ asset('assets/img/courses/coursesthumb003.jpg')}}" alt="">
                            </div>
                            <div class="courses-heading text-center">
                                <h1>Индивидуальное обучение</h1>
                            </div>
                            <div class="courses-icon text-center">
                                <div class="courses-single-icon courses-single-icon-2">
                                    <span class="price">Цена</span>
                                    <span class="user-number">700/Ч.</span>
                                </div>
                                <div class="courses-single-icon courses-single-icon-2">
                                    <span class="ti-user"></span>
                                    <span class="seat">Студенты</span>
                                    <span class="user-number">4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
 </div>
@endsection