@extends('front.home.layouts.master')
@section('title', 'Home')

@section('content')


    @include('front.partials.banner.banner_3')

    @include('front.partials.service.service_4')

    @include('front.partials.cta.cta_3')

    @include('front.partials.about.about_3')

    @include('front.about.partials.work_process')

    @include('front.partials.why_choose_us.why_us_3')

    <!-- case studies area start -->
    <div class="rts-case-studies-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-three center">
                        <span class="pre">Case Studies</span>
                        <div class="bg-title">05</div>
                        <h2 class="title rts-text-anime-style-1">Specialist Business Cases</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10 rts_jump_animation-wrapper">
                <div class="col-lg-6 rts-jump__item">
                    <div class="single-project-style-three">
                        <a href="project-details.html" class="thumbnail">
                            <img src="{{ asset('front/assets/images/project/03.webp') }}" alt="project">
                        </a>
                        <div class="inner-content">
                            <a href="project-details.html">
                                <h4 class="title">Business Growth</h4>
                            </a>
                            <span>Business Strategy</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 rts-jump__item">
                    <div class="single-project-style-three">
                        <a href="project-details.html" class="thumbnail">
                            <img src="{{ asset('front/assets/images/project/04.webp') }}" alt="project">
                        </a>
                        <div class="inner-content">
                            <a href="project-details.html">
                                <h4 class="title">Startup Solution</h4>
                            </a>
                            <span>Business Strategy</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 rts-jump__item">
                    <div class="single-project-style-three">
                        <a href="project-details.html" class="thumbnail">
                            <img src="{{ asset('front/assets/images/project/05.webp') }}" alt="project">
                        </a>
                        <div class="inner-content">
                            <a href="project-details.html">
                                <h4 class="title">Growth Manage</h4>
                            </a>
                            <span>Business Strategy</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 rts-jump__item">
                    <div class="single-project-style-three">
                        <a href="project-details.html" class="thumbnail">
                            <img src="{{ asset('front/assets/images/project/06.webp') }}" alt="project">
                        </a>
                        <div class="inner-content">
                            <a href="project-details.html">
                                <h4 class="title">Company Skills</h4>
                            </a>
                            <span>Business Strategy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- case studies area end -->

    @include('front.partials.testimonials.testimonial')

    @include('front.partials.pricing.pricing')

    @include('front.partials.blog.blogs_3')





    <!-- offcanvase search -->
    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input class="search-input autocomplete" type="text" placeholder="Search by keyword or #">
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