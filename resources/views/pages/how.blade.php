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
                            <h1 class="white-color f-700">Вопрос-ответ</h1>
                            <nav class="text-center" aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="/">ГЛАВНАЯ </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Вопрос-ответ</li>
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

<!-- faq start -->
<div class="fag-area pt-100 pb-70 mb-">
    <div class="container">
        <div class="faq-list">
            <div class="row">
                <div class="col-xl-8 col-lg-10 col-md-12">
                    <div class="faq-area-title mb-35">
                        <h2 class="mb-15">Вопрос-ответ</h2>
                        <p>Will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happi nesso one rejects. </p>
                    </div>
                    <div class="faq-wrapper mb-30 wow fadeInLeft" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                        <div class="accordion" id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <span class="ti-help-alt"></span>
                                            How all this mistaken idea of denouncing pleasure and praising pain ?
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blandi sentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident similique.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span class="ti-help-alt"></span>
                                            Who loves or pursues or desires to obtain pain of itself because ?
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blandi sentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident similique.
                                    </div>
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