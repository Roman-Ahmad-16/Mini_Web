@extends('front.home.layouts.master')
@section('title', 'Home')

@section('content')


    @include('front.partials.banner.banner_4')

    @include('front.partials.about.about_4')

    @include('front.partials.service.service2')

    @include('front.partials.cta.cta')

    @include('front.partials.why_choose_us.why_choose_us_4')

    @include('front.partials.counter.counter_3')

    @include('front.partials.project.project_1')

    @include('front.partials.faq.faq_2')

    @include('front.partials.team.team_1')

    @include('front.partials.pricing.pricing_2')

    @include('front.partials.appointment.appointment_1')

    @include('front.partials.blog.blogs_4')

    @include('front.partials.gallery.gallery_1')


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
        <div id="close" class="search-close-icon"><i class="far fa-times"></i>
        </div>
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