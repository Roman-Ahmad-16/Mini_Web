@extends('front.home.layouts.master')
@section('title', 'Home')

@section('content')

    <body class="full-screen-slider-demo">

        <div class="full-screen-demo-swiper-main-wrapper">
            <div class="swiper mySwiper-full-screen-wrapper" dir="ltr">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <!-- rts banner area start -->
                        <div class="rts-banner-area-start-11 bg_image full-screen-height rts-section-gap">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="banner-inner-content-12 pt--120 pt_sm--60">
                                            <p class="pre">
                                                <img src="{{ asset('front/assets/images/banner/icon/01') }}.svg" alt="">
                                                Business Success Starts Here
                                            </p>
                                            <h1 class="title rts-text-anime-style-1">Designing Bold Brands <br>
                                                for a Digital World</h1>
                                            <p class="disc">
                                                Porttitor ornare fertum aliquam pharetra facilisis gravida risus suscipit
                                                Dui feugiat fusce
                                                conubia ridiculus tristique parturient
                                            </p>
                                            <div class="button-wrapper">
                                                <a href="#" class="rts-btn btn-primary btn-white">Get In Touch</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="circle-text-main">
                                <div class="circle">
                                    <div class="logo">
                                        <img src="{{ asset('front/assets/images/banner/icon/video') }}-white.svg" alt="">
                                    </div>
                                    <div class="text">
                                        <p>
                                            Watch Now * Watch Now * Watch Now *
                                        </p>
                                    </div>
                                </div>
                                <div class="vedio-icone">
                                    <a class="video-play-button play-video popup-video"
                                        href="https://www.youtube.com/watch?v=vZE0j_WCRvI">
                                        <span></span>
                                    </a>
                                    <div class="video-overlay">
                                        <a href="#section1" class="video-overlay-close">×</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- rts banner area end -->
                    </div>
                    <div class="swiper-slide">
                        <!-- rts banner area start -->
                        <div class="rts-banner-area-start-11 bg_image two full-screen-height rts-section-gap">
                            <div class="container pb--40 pt--140 pt_sm--30">
                                <div class="row g-5 align-items-center">
                                    <div class="col-lg-7">
                                        <div class="about-6-thumbnail-left-wrapper">
                                            <div class="single-thumbnail">
                                                <img src="{{ asset('front/assets/images/about/12.webp') }}" alt="about">
                                            </div>
                                            <div class="single-thumbnail mt--40">
                                                <img src="{{ asset('front/assets/images/about/13.webp') }}" alt="about">
                                            </div>
                                            <div class="progress-circle-main-wrapper">

                                                <div class="progress-area-wrapper">
                                                    <div class="single-progress-circle">
                                                        <svg class="radial-progress" data-countervalue="80"
                                                            viewBox="0 0 80 80">
                                                            <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                                            <circle class="bar--animated" cx="40" cy="40" r="35"
                                                                style="stroke-dashoffset: 217.8;"></circle>
                                                            <text class="countervalue start" x="50%" y="55%"
                                                                transform="matrix(0, 1, -1, 0, 80, 0)">80</text>
                                                        </svg>
                                                    </div>
                                                    <h5 class="title">Business Progress</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 pl--30">
                                        <div class="about-6-inner-content-content">
                                            <div class="title-style-one left mb--30">
                                                <span class="pre">About Business</span>
                                                <h2 class="title rts-text-anime-style-1">Smart and effective <br>
                                                    business agency.

                                                </h2>
                                            </div>
                                            <p class="disc">
                                                we believe in the power of collaboration and personalized solutions. By
                                                understanding
                                                our clients' unique needs and goals, we tailor our approach to deliver
                                                strategic
                                                insights, creative solutions.
                                            </p>
                                            <div class="call-and-sign-area">
                                                <div class="call-area">
                                                    <div class="icon">
                                                        <i class="fa-sharp fa-regular fa-phone-volume"></i>
                                                    </div>
                                                    <div class="information">
                                                        <span>Call us anytime</span>
                                                        <a href="#">
                                                            <h6 class="title">+256 56778.5678</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="sign-area">
                                                    <img src="{{ asset('front/assets/images/about/sign-white') }}.svg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary btn-white">About Us</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- rts banner area end -->

                    </div>
                    <div class="swiper-slide">
                        <!-- rts banner area start -->
                        <div class="rts-banner-area-start-11 bg_image three full-screen-height rts-section-gap">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="title-style-10 color-white-title">
                                            <span class="pre">Our Trusted Clients</span>
                                            <h2 class="title rts-text-anime-style-1">Our Happy Clients</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt--65">
                                    <div class="col-lg-12">
                                        <div class="client-three-wrapper">
                                            <div class="single">
                                                <img src="{{ asset('front/assets/images/brand/01.webp') }}"
                                                    alt="Business_client">
                                            </div>
                                            <div class="single">
                                                <img src="{{ asset('front/assets/images/brand/02.webp') }}"
                                                    alt="Business_client">
                                            </div>
                                            <div class="single">
                                                <img src="{{ asset('front/assets/images/brand/03.webp') }}"
                                                    alt="Business_client">
                                            </div>
                                            <div class="single">
                                                <img src="{{ asset('front/assets/images/brand/04.webp') }}"
                                                    alt="Business_client">
                                            </div>
                                            <div class="single">
                                                <img src="{{ asset('front/assets/images/brand/05.webp') }}"
                                                    alt="Business_client">
                                            </div>
                                            <div class="single">
                                                <img src="{{ asset('front/assets/images/brand/06.webp') }}"
                                                    alt="Business_client">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- rts banner area end -->

                    </div>
                    <div class="swiper-slide">
                        <!-- rts banner area start -->
                        <div class="rts-banner-area-start-11 bg_image four full-screen-height rts-section-gap">
                            <div class="container pt--120 pt_sm--60">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="testimonials-full-screen-area-wrapper">
                                            <div class="left-circle-text">
                                                <div class="circle-text-main">
                                                    <div class="circle">
                                                        <div class="logo">
                                                            <img src="{{ asset('front/assets/images/banner/icon/video') }}-white.svg"
                                                                alt="">
                                                        </div>
                                                        <div class="text-1">
                                                            <p>
                                                                Watch Now * Watch Now * Watch Now *
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="vedio-icone">
                                                        <a class="video-play-button play-video popup-video"
                                                            href="https://www.youtube.com/watch?v=vZE0j_WCRvI">
                                                            <span></span>
                                                        </a>
                                                        <div class="video-overlay">
                                                            <a href="#section1" class="video-overlay-close">×</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-text-area-main-wrapper">
                                                <p class="disc">
                                                    I can't recommend The Gourmet Haven enough. It's a place for special
                                                    occasions, date
                                                    nights, or whenever you're in the mood for a culinary adventure. The
                                                    combination of
                                                    exceptional.
                                                </p>
                                                <div class="avatar-user-area">
                                                    <img src="{{ asset('front/assets/images/testimonials/01.png') }}"
                                                        alt="testimonials">
                                                    <div class="information-wrapper">
                                                        <h5 class="title">William Henry</h5>
                                                        <p>Designer at <span>Vertex Agency</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- rts banner area end -->
                    </div>
                    <div class="swiper-slide">
                        <!-- rts banner area start -->
                        <div
                            class="rts-banner-area-start-11 blog-area-full-screen bg_image five full-screen-height rts-section-gap">
                            <div class="container pt--50">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="title-style-10 color-white-title">
                                            <h2 class="title rts-text-anime-style-1">Recent blog post</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-5 mt--10">
                                    <div class="col-lg-12 mt--10">
                                        <div class="blog-swiper-style-one">
                                            <div class="swiper mySwiper-blog-one">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="single-blog-area-one in-full-screen">

                                                            <div class="bottom-details">
                                                                <a href="#" class="thumbnail">
                                                                    <img src="{{ asset('front/assets/images/blog/01.webp') }}"
                                                                        alt="blog-area">
                                                                </a>
                                                            </div>
                                                            <p>Business Solution / <span>by David Dolean</span></p>
                                                            <a href="#">
                                                                <h4 class="title">Building a Brand That from Market Leaders
                                                                </h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="single-blog-area-one in-full-screen">

                                                            <div class="bottom-details">
                                                                <a href="#" class="thumbnail">
                                                                    <img src="{{ asset('front/assets/images/blog/02.webp') }}"
                                                                        alt="blog-area">
                                                                </a>
                                                            </div>
                                                            <p>Business Solution / <span>by David Dolean</span></p>
                                                            <a href="#">
                                                                <h4 class="title">Transforming Your Best Of Approach to
                                                                    Business</h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="single-blog-area-one in-full-screen">
                                                            <div class="bottom-details">
                                                                <a href="#" class="thumbnail">
                                                                    <img src="{{ asset('front/assets/images/blog/03.webp') }}"
                                                                        alt="blog-area">
                                                                </a>
                                                            </div>
                                                            <p>Business Solution / <span>by David Dolean</span></p>
                                                            <a href="#">
                                                                <h4 class="title">The quick settle tips of the new ages
                                                                    exist</h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="single-blog-area-one in-full-screen">

                                                            <div class="bottom-details">
                                                                <a href="#" class="thumbnail">
                                                                    <img src="{{ asset('front/assets/images/blog/01.webp') }}"
                                                                        alt="blog-area">
                                                                </a>
                                                            </div>
                                                            <p>Business Solution / <span>by David Dolean</span></p>
                                                            <a href="#">
                                                                <h4 class="title">Building a Brand That from Market Leaders
                                                                </h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="single-blog-area-one in-full-screen">

                                                            <div class="bottom-details">
                                                                <a href="#" class="thumbnail">
                                                                    <img src="{{ asset('front/assets/images/blog/02.webp') }}"
                                                                        alt="blog-area">
                                                                </a>
                                                            </div>
                                                            <p>Business Solution / <span>by David Dolean</span></p>
                                                            <a href="#">
                                                                <h4 class="title">Transforming Your Best Of Approach to
                                                                    Business</h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="single-blog-area-one in-full-screen">

                                                            <div class="bottom-details">
                                                                <a href="#" class="thumbnail">
                                                                    <img src="{{ asset('front/assets/images/blog/03.webp') }}"
                                                                        alt="blog-area">
                                                                </a>
                                                            </div>
                                                            <p>Business Solution / <span>by David Dolean</span></p>
                                                            <a href="#">
                                                                <h4 class="title">The quick settle tips of the new ages
                                                                    exist</h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- rts banner area end -->
                    </div>
                    <div class="swiper-slide">
                        <!-- rts banner area start -->

                        <!-- rts banner area end -->
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>



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

        <script>
            const text = document.querySelector(".text");
            text.innerHTML = text.innerText
                .split("")
                .map(
                    (char, i) => `<span style="transform:rotate(${i * 10.3}deg)">${char}</span>`
                )
                .join("");
        </script>
        <script>
            const textNew = document.querySelector(".text-1");
            textNew.innerHTML = textNew.innerText
                .split("")
                .map(
                    (char, i) => `<span style="transform:rotate(${i * 10.3}deg)">${char}</span>`
                )
                .join("");
        </script>
    </body>
@endsection