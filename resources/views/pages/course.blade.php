@extends('layouts.app')

@section('content')
<!-- slider-start -->
<div class="slider-area">
    <div class="page-title">
        <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center"
            style="background-image: url({{ asset('assets/img/bg/others_bg.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider-content slider-content-breadcrumb text-center">
                            <h1 class="white-color f-700">Курсы</h1>
                            <nav class="text-center" aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="/">ГЛАВНАЯ </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Курсы</li>
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
                    <div class="courses-wrapper course-radius-none mb-30">
                        <div class="courses-thumb">
                           <img src="{{ asset('assets/img/courses/single_courses_thumb_01.jpg')}}" alt="">
                        </div>
                        <div class="course-main-content clearfix">
                            <div class="courses-content">
                                <div class="courses-category-name">
                                    <span>
                                        <a href="#">Aнглийский</a>
                                    </span>
                                </div>
                                <div class="courses-heading">
                                    <h1>Занятия в группах</h1>
                                </div>
                                <div class="courses-para">
                                    <p>Интересные и эффективные занятия в группах</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="courses-wrapper course-radius-none mb-30">
                        <div class="courses-thumb">
                           <img src="{{ asset('assets/img/courses/single_courses_thumb_02.jpg')}}" alt="">
                        </div>
                        <div class="course-main-content clearfix">
                            <div class="courses-content">
                                <div class="courses-category-name">
                                    <span>
                                        <a href="#">Aнглийский</a>
                                    </span>
                                </div>
                                <div class="courses-heading">
                                    <h1>Подготовка к IELTS/TOEFL</h1>
                                </div>
                                <div class="courses-para">
                                    <p>Подготовка к сдаче международных экзаменов на самый высокий бал.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="courses-wrapper course-radius-none mb-30">
                        <div class="courses-thumb">
                           <img src="{{ asset('assets/img/courses/single_courses_thumb_03.jpg')}}" alt="">
                        </div>
                        <div class="course-main-content clearfix">
                            <div class="courses-content">
                                <div class="courses-category-name">
                                    <span>
                                        <a href="#">Aнглийский</a>
                                    </span>
                                </div>
                                <div class="courses-heading">
                                    <h1>Индивидуальное обучение</h1>
                                </div>
                                <div class="courses-para">
                                    <p>Любые индивидуальные программы для ваших целей.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="courses-wrapper course-radius-none mb-30">
                        <div class="courses-thumb">
                           <img src="{{ asset('assets/img/courses/single_courses_thumb_03.jpg')}}" alt="">
                        </div>
                        <div class="course-main-content clearfix">
                            <div class="courses-content">
                                <div class="courses-category-name">
                                    <span>
                                        <a href="#">французский язык</a>
                                    </span>
                                </div>
                                <div class="courses-heading">
                                    <h1>Занятия в группах</h1>
                                </div>
                                <div class="courses-para">
                                    <p>Любые индивидуальные программы для ваших целей.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="courses-wrapper course-radius-none mb-30">
                        <div class="courses-thumb">
                           <img src="{{ asset('assets/img/courses/single_courses_thumb_02.jpg')}}" alt="">
                        </div>
                        <div class="course-main-content clearfix">
                            <div class="courses-content">
                                <div class="courses-category-name">
                                    <span>
                                        <a href="#">французский язык</a>
                                    </span>
                                </div>
                                <div class="courses-heading">
                                    <h1>Подготовка к TFI/DALF/DELF</h1>
                                </div>
                                <div class="courses-para">
                                    <p>Подготовка к сдаче международных экзаменов на самый высокий бал.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="courses-wrapper course-radius-none mb-30">
                        <div class="courses-thumb">
                           <img src="{{ asset('assets/img/courses/single_courses_thumb_03.jpg')}}" alt="">
                        </div>
                        <div class="course-main-content clearfix">
                            <div class="courses-content">
                                <div class="courses-category-name">
                                    <span>
                                        <a href="#">французский язык</a>
                                    </span>
                                </div>
                                <div class="courses-heading">
                                    <h1>Индивидуальное обучение</h1>
                                </div>
                                <div class="courses-para">
                                    <p>Любые индивидуальные программы для ваших целей.</p>
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