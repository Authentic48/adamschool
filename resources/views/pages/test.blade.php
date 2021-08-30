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
                            <h1 class="white-color f-700">тесты</h1>
                            <nav class="text-center" aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="/">ГЛАВНАЯ </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">тесты</li>
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
<div id="courses" class="courses-area courses-bg-height pt-100 pb-70" style="background-image: url(assets/img/courses/courses_bg.png);">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="section-title mb-50 text-center">
                    <div class="section-title-heading mb-20">
                        <h1 class="white-color">Hаши тесты</h1>
                    </div>
                    <div class="section-title-para">
                        <p class="white-color">Если вы сомневаетесь в своём уровне. мы определим ваш уровень и ваши слабые места, над которыми будем работать на уроках!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="courses-list">
            <div class="row courses-active">
                <div class="col-xl-12">
                    <div class="courses-wrapper course-radius-none mb-30">
                        <div class="course-main-content clearfix">
                            <div class="courses-content">
                                <div class="courses-category-name">
                                    <span>
                                        <a href="#">Английский</a>
                                    </span>
                                </div>
                                <div class="courses-heading">
                                    <h1>Beginner</h1>
                                </div>
                                <div class="courses-para">
                                    <p>нажмите, чтобы пройти <a href="https://docs.google.com/forms/d/e/1FAIpQLSdp6GxfuQ2hO3zzFh90WfW0uSteDRXUuzVmO1BFT8RHco0V6w/viewform">тест</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="courses-wrapper course-radius-none mb-30">
                        <div class="course-main-content clearfix">
                            <div class="courses-content">
                                <div class="courses-category-name">
                                    <span>
                                        <a href="#">Aнглийский</a>
                                    </span>
                                </div>
                                <div class="courses-heading">
                                    <h1>Elementary</h1>
                                </div>
                                <div class="courses-para">
                                    <p>нажмите, чтобы пройти <a href="https://docs.google.com/forms/d/e/1FAIpQLSdp6GxfuQ2hO3zzFh90WfW0uSteDRXUuzVmO1BFT8RHco0V6w/viewform">тест</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="courses-wrapper course-radius-none mb-30">
                        <div class="courses-author">
                            <img src="img/courses/coursesauthor1.png" alt="">
                        </div>
                        <div class="course-main-content clearfix">
                            <div class="courses-content">
                                <div class="courses-category-name">
                                    <span>
                                        <a href="#">Английский</a>
                                    </span>
                                </div>
                                <div class="courses-heading">
                                    <h1>Pre-intermediate</h1>
                                </div>
                                <div class="courses-para">
                                    <p>нажмите, чтобы пройти <a href="https://docs.google.com/forms/d/e/1FAIpQLSdp6GxfuQ2hO3zzFh90WfW0uSteDRXUuzVmO1BFT8RHco0V6w/viewform">тест</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="courses-wrapper course-radius-none mb-30">
                        <div class="course-main-content clearfix">
                            <div class="courses-content">
                                <div class="courses-category-name">
                                    <span>
                                        <a href="#">Английский</a>
                                    </span>
                                </div>
                                <div class="courses-heading">
                                    <h1>Intermediate</h1>
                                </div>
                                <div class="courses-para">
                                    <p>нажмите, чтобы пройти <a href="https://docs.google.com/forms/d/e/1FAIpQLSdp6GxfuQ2hO3zzFh90WfW0uSteDRXUuzVmO1BFT8RHco0V6w/viewform">тест</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- courses end -->
@endsection