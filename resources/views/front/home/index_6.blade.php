@extends('front.home.layouts.master')
@section('title', 'Home')

@section('content')


    <!-- banner area start -->
    <div class="rts-banner-area-six rts-section-gapTop pb--90 bg_banner-five bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content-six">
                        <div class="left-side">
                            <h1 class="title rts-text-anime-style-1">
                                Drive Growth Build <br>
                                Elevate Your Brand
                            </h1>
                            <p class="disc">
                                Porttitor ornare fertum aliquam pharetra facilisis gravida risus suscipit Dui feugiat
                                fusce conubia ridiculus tristique parturient
                            </p>
                        </div>
                        <div class="right-stars-area">
                            <h2 class="counter title"><span class="odometer" data-count="28">00</span>K+
                            </h2>
                            <p>Business Revenue</p>
                            <div class="stars-wrapper">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="button-wrapper">
                                <a href="contact.html" class="rts-btn btn-primary">Get In Touch</a>
                                <a href="about.html" class="rts-btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->

    @include('front.home.partials.about_6')

    @include('front.home.partials.cta_3')

    <div class="rts-business-goal-area-wrapper-6 rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-style-five center">
                            <span class="pre">Our Services</span>
                            <h2 class="title">Effective Services</h2>

                            <!-- rts galllery area start -->
                            <div class="rts-gallery-area">
                                <div class="container-full">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="gallery-area-main-wrapper-4">
                                                <div class="single-gallery">
                                                    <a href="{{asset('front/assets/images/gallery/06.webp')}}"
                                                        class="thumbnail gallery-image">
                                                        <img src="{{asset('front/assets/images/gallery/06.webp')}}"
                                                            alt="gallery">
                                                    </a>
                                                    <div class="instagram">
                                                        <img src="{{asset('front/assets/images/gallery/instagram.svg')}}"
                                                            alt="instagram.svg">
                                                    </div>
                                                </div>
                                                <div class="single-gallery">
                                                    <a href="{{asset('front/assets/images/gallery/07.webp')}}"
                                                        class="thumbnail gallery-image">
                                                        <img src="{{asset('front/assets/images/gallery/07.webp')}}"
                                                            alt="gallery">
                                                    </a>
                                                    <div class="instagram">
                                                        <img src="{{asset('front/assets/images/gallery/instagram.svg')}}"
                                                            alt="instagram.svg">
                                                    </div>
                                                </div>
                                                <div class="single-gallery">
                                                    <a href="{{asset('front/assets/images/gallery/08.webp')}}"
                                                        class="thumbnail gallery-image">
                                                        <img src="{{asset('front/assets/images/gallery/08.webp')}}"
                                                            alt="gallery">
                                                    </a>
                                                    <div class="instagram">
                                                        <img src="{{asset('front/assets/images/gallery/instagram.svg')}}"
                                                            alt="instagram.svg">
                                                    </div>
                                                </div>
                                                <div class="single-gallery">
                                                    <a href="{{asset('front/assets/images/gallery/09.webp')}}"
                                                        class="thumbnail gallery-image">
                                                        <img src="{{asset('front/assets/images/gallery/09.webp')}}"
                                                            alt="gallery">
                                                    </a>
                                                    <div class="instagram">
                                                        <img src="{{asset('front/assets/images/gallery/instagram.svg')}}"
                                                            alt="instagram.svg">
                                                    </div>
                                                </div>
                                                <div class="single-gallery">
                                                    <a href="{{asset('front/assets/images/gallery/10.webp')}}"
                                                        class="thumbnail gallery-image">
                                                        <img src="{{asset('front/assets/images/gallery/10.webp')}}"
                                                            alt="gallery">
                                                    </a>
                                                    <div class="instagram">
                                                        <img src="{{asset('front/assets/images/gallery/instagram.svg')}}"
                                                            alt="instagram.svg">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- rts galllery area end -->




                            <!-- offcanvase search -->
                            <div class="search-input-area">
                                <div class="container">
                                    <div class="search-input-inner">
                                        <div class="input-div">
                                            <input class="search-input autocomplete" type="text"
                                                placeholder="Search by keyword or #">
                                            <button><i class="far fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
                            </div>
                            <div id="anywhere-home" class="">
                            </div>

                            <!-- rtl btn area start -->
                            <div class="rtl-ltr-switcher-btn">
                                <span class="rtl show">View RTL</span>
                                <span class="ltr">View LTR</span>
                            </div>
                            <!-- rtl btn area end -->

                            <!-- progress area start -->
                            <div class="progress-wrap">
                                <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                                    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                                        style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
                                    </path>
                                </svg>
                            </div>
                            <!-- progress area end -->


@endsection