@extends('front.home.layouts.master')
@section('title', 'Home')

@section('content')

    <body class="index-five">

<!-- rts banner area five -->
<div class="rts-banner-five-wrapper rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-five-content">
                    <div class="title-area">
                        <p class="pre"><span>Welcome!</span> Start Growing Your Business Today</p>
                        <h1 class="title rts-text-anime-style-1">
                            We Help to Grow <br>
                            Your <span>Business</span>
                        </h1>
                    </div>
                    <div class="description-area">
                        <p class="disc">
                            Porttitor ornare fermentum aliquam pharetra facilisis gravida risus Dui feugiat fusce
                            conubia ridiculus tristique parturient
                        </p>
                        <a href="service.html" class="rts-btn btn-primary">Our Services</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center mt--65">
            <div class="col-lg-9">
                <div class="banner-image-primary-five">
                    <img class="grow" src="{{asset('front/assets/images/banner/05.webp')}}" alt="banner">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="banner-contact-form-five">
                    <form action="#">
                        <h5 class="title">Let's Get Started</h5>
                        <div class="input-single">
                            <input type="text" placeholder="Name" required>
                        </div>
                        <div class="input-single">
                            <input type="text" placeholder="Email" required>
                        </div>
                        <div class="input-single">
                            <textarea placeholder="Type your Message" required></textarea>
                        </div>
                        <button class="rts-btn btn-primary btn-white">Submit Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-area">
        <img src="{{asset('front/assets/images/banner/shape/05.png')}}" alt="shape" class="one">
        <img src="{{asset('front/assets/images/banner/shape/06.png')}}" alt="shape" class="two">
        <img src="{{asset('front/assets/images/banner/shape/07.png')}}" alt="shape" class="three">
    </div>
</div>
<!-- rts banner area five end -->

<!-- rts service area start -->
<div class="rts-service-area rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-five center">
                    <span class="pre">Our Services</span>
                    <h2 class="title">Effective Services</h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--10">
            <div class="col-lg-4 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.0" data-duration="1.2">
                <div class="service-single-main-wrapper-five">
                    <div class="icon">
                        <img src="{{asset('front/assets/images/service/icons/08.svg')}}" alt="service">
                    </div>
                    <div class="inner-content">
                        <a href="service-details.html">
                            <h5 class="title">Management planning</h5>
                        </a>
                        <p class="disc">
                            Purus dui eget sollicitudin curae leo proin platea cras, morbi torquent massa
                        </p>
                        <a href="service-details.html" class="rts-btn btn-primary btn-white">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                <div class="service-single-main-wrapper-five">
                    <div class="icon">
                        <img src="{{asset('front/assets/images/service/icons/09.svg')}}" alt="service">
                    </div>
                    <div class="inner-content">
                        <a href="service-details.html">
                            <h5 class="title">Business Growth</h5>
                        </a>
                        <p class="disc">
                            Purus dui eget sollicitudin curae leo proin platea cras, morbi torquent massa
                        </p>
                        <a href="service-details.html" class="rts-btn btn-primary btn-white">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                <div class="service-single-main-wrapper-five">
                    <div class="icon">
                        <img src="{{asset('front/assets/images/service/icons/10.svg')}}" alt="service">
                    </div>
                    <div class="inner-content">
                        <a href="service-details.html">
                            <h5 class="title">Social planning</h5>
                        </a>
                        <p class="disc">
                            Purus dui eget sollicitudin curae leo proin platea cras, morbi torquent massa
                        </p>
                        <a href="service-details.html" class="rts-btn btn-primary btn-white">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts service area end -->

        <!-- rs call to action area three -->
        <div class="rts-call-to-action-area-three bg_image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cta-main-wrapper-inner">
                            <h2 class="title rts-text-anime-style-1">
                                Contact Our Agent For Any kind off <br> Business Help
                                <span>(24/7 Available)</span>
                            </h2>
                            <div class="call-area">
                                <div class="icon">
                                    <i class="fa-solid fa-phone-flip"></i>
                                </div>
                                <a href="#">+215 2153.2159</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rs call to action area three end -->

<!-- rts progress area start -->
<div class="rts-progress-area-main-wrapper rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="progress-circle-main-wrapper">
                    <div class="single-progress-area">
                        <div class="single-progress-circle">
                            <svg class="radial-progress" data-countervalue="76" viewBox="0 0 80 80">
                                <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                <circle class="bar--animated" cx="40" cy="40" r="35"
                                    style="stroke-dashoffset: 217.8;"></circle>
                                <text class="countervalue start" x="50%" y="50%"
                                    transform="matrix(0, 1, -1, 0, 80, 0)"></text>
                            </svg>
                            <img src="{{asset('front/assets/images/fun/01.svg')}}" alt="fun">
                        </div>
                        <div class="right-counter">
                            <h2 class="counter title"><span class="odometer" data-count="76">00</span>%
                            </h2>
                            <p>Trusted Clients</p>
                        </div>
                    </div>
                    <div class="single-progress-area">
                        <div class="single-progress-circle">
                            <svg class="radial-progress" data-countervalue="89" viewBox="0 0 80 80">
                                <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                <circle class="bar--animated" cx="40" cy="40" r="35"
                                    style="stroke-dashoffset: 217.8;"></circle>
                                <text class="countervalue start" x="50%" y="50%"
                                    transform="matrix(0, 1, -1, 0, 80, 0)"></text>
                            </svg>
                            <img src="{{asset('front/assets/images/fun/02.svg')}}" alt="fun">
                        </div>
                        <div class="right-counter">
                            <h2 class="counter title"><span class="odometer" data-count="89">00</span>%
                            </h2>
                            <p>Project Completed</p>
                        </div>
                    </div>
                    <div class="single-progress-area">
                        <div class="single-progress-circle">
                            <svg class="radial-progress" data-countervalue="70" viewBox="0 0 80 80">
                                <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                <circle class="bar--animated" cx="40" cy="40" r="35"
                                    style="stroke-dashoffset: 217.8;"></circle>
                                <text class="countervalue start" x="50%" y="50%"
                                    transform="matrix(0, 1, -1, 0, 80, 0)"></text>
                            </svg>
                            <img src="{{asset('front/assets/images/fun/03.svg')}}" alt="fun">
                        </div>
                        <div class="right-counter">
                            <h2 class="counter title"><span class="odometer" data-count="70">00</span>%
                            </h2>
                            <p>Business Awards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts progress area end -->

        <!-- rts about area start -->
        <div class="rts-about-five-area rts-section-gapBottom">
            <div class="container-full">
                <div class="row align-items-center">
                    <div class="col-lg-6 pr--70 pr_md--0 pr_sm--0">
                        <div class="thumbnail-about-five">
                            <img src="{{ asset('front/assets/images/about/10.webp') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 mt_md--30 mt_sm--30">
                        <div class="about-content-inner-five">
                            <div class="title-style-five">
                                <span class="pre">More About Invena</span>
                                <h2 class="title rts-text-anime-style-1">Our Consulting For All Kind Of Finance
                                    Services</h2>
                            </div>
                            <div class="inner-about-home-7">
                                <p class="disc">
                                    Molestie velit imperdiet porttitor at taciti, aptent semper primis nisl ut. Inceptos
                                    velit
                                    penatibus tortor in sed curae urna lobortis ultricies aptent integer bibendum parturient
                                    molestie risus
                                </p>
                                <!-- ingle about start -->
                                <div class="about-single-home-7">
                                    <div class="icon">
                                        <img src="{{ asset('front/assets/images/about/icons/03.svg') }}" alt="">
                                    </div>
                                    <div class="discription">
                                        <h6 class="title">
                                            Global Insights
                                        </h6>
                                        <p class="disc">
                                            Aliquet bibendum duis diam ultricies rutrum vulputate, platea lacinia tortor
                                            mollis
                                            nam dis.
                                        </p>
                                    </div>
                                </div>
                                <!-- ingle about end -->
                                <!-- ingle about start -->
                                <div class="about-single-home-7">
                                    <div class="icon">
                                        <img src="{{ asset('front/assets/images/about/icons/04.svg') }}" alt="">
                                    </div>
                                    <div class="discription">
                                        <h6 class="title">
                                            Business Investment
                                        </h6>
                                        <p class="disc">
                                            Aliquet bibendum duis diam ultricies rutrum vulputate, platea lacinia tortor
                                            mollis
                                            nam dis.
                                        </p>
                                    </div>
                                </div>
                                <!-- ingle about end -->
                                <!-- ingle about start -->
                                <div class="about-single-home-7">
                                    <div class="icon">
                                        <img src="{{ asset('front/assets/images/about/icons/05.svg') }}" alt="">
                                    </div>
                                    <div class="discription">
                                        <h6 class="title">
                                            Yearly Calculation
                                        </h6>
                                        <p class="disc">
                                            Aliquet bibendum duis diam ultricies rutrum vulputate, platea lacinia tortor
                                            mollis
                                            nam dis.
                                        </p>
                                    </div>
                                </div>
                                <!-- ingle about end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts about area end -->


 <!-- rts team area start -->
<div class="rts-team-area rts-section-gap bg_image bg_team-area-five">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-five center">
                    <span class="pre">Team Members</span>
                    <h2 class="title">Meet Our Dedicated Team</h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--10">
            <div class="col-lg-3 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.0" data-duration="1.2">
                <div class="single-team-style-5">
                    <a href="team-details.html" class="thumbnail">
                        <img src="{{asset('front/assets/images/team/08.webp')}}" alt="thumbnail">
                    </a>
                    <div class="inner">
                        <a href="team-details.html">
                            <h5 class="title">Andreas Menor</h5>
                        </a>
                        <span>Sr. Manager</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                <div class="single-team-style-5">
                    <a href="team-details.html" class="thumbnail">
                        <img src="{{asset('front/assets/images/team/09.webp')}}" alt="thumbnail">
                    </a>
                    <div class="inner">
                        <a href="team-details.html">
                            <h5 class="title">John Dion</h5>
                        </a>
                        <span>Sr. Manager</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                <div class="single-team-style-5">
                    <a href="team-details.html" class="thumbnail">
                        <img src="{{asset('front/assets/images/team/10.webp')}}" alt="thumbnail">
                    </a>
                    <div class="inner">
                        <a href="team-details.html">
                            <h5 class="title">Martin Anderson</h5>
                        </a>
                        <span>Sr. Manager</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.6" data-duration="1.2">
                <div class="single-team-style-5">
                    <a href="team-details.html" class="thumbnail">
                        <img src="{{asset('front/assets/images/team/11.webp')}}" alt="thumbnail">
                    </a>
                    <div class="inner">
                        <a href="team-details.html">
                            <h5 class="title">Kupar Tamil</h5>
                        </a>
                        <span>Sr. Manager</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts team area end -->


<!-- rts business grotha area start -->
<div class="rts-business-groth-area rts-section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="business-groth-inner-wrapper-5">
                    <div class="title-style-five">
                        <span class="pre">Business Growth</span>
                        <h2 class="title rts-text-anime-style-1">Contributing To Important <br> Global Initiatives
                        </h2>
                    </div>
                    <div class="progress-wrapper-about-4 mt--50 mb--50">

                        <div class="single-progress">
                            <h6 class="title">Business Solution</h6>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s"
                                    data-wow-delay=".3s" role="progressbar" style="width: 100%" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100">
                                </div>
                                <span class="progress-number">100%</span>
                            </div>
                        </div>
                        <div class="single-progress">
                            <h6 class="title">Empowering Success</h6>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s"
                                    data-wow-delay=".3s" role="progressbar" style="width: 100%" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100">
                                </div>
                                <span class="progress-number">100%</span>
                            </div>
                        </div>
                        <div class="single-progress">
                            <h6 class="title">Simplifying Success</h6>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s"
                                    data-wow-delay=".3s" role="progressbar" style="width: 100%" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100">
                                </div>
                                <span class="progress-number">100%</span>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="rts-btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="business-groth-5-thumbnail">
                    <img src="{{asset('front/assets/images/business/02.webp')}}" alt="business">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts business grotha area ends -->

<div class="rts-trusted-client rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-area-client-client text-center">
                    <p class="client-title">Our Trusted Clients</p>
                </div>
            </div>
        </div>
        <div class="row mt--65">
            <div class="col-lg-12">
                <div class="client-three-wrapper">
                    <div class="single">
                        <img src="{{asset('front/assets/images/brand/01.webp')}}" alt="Business_client">
                    </div>
                    <div class="single">
                        <img src="{{asset('front/assets/images/brand/02.webp')}}" alt="Business_client">
                    </div>
                    <div class="single">
                        <img src="{{asset('front/assets/images/brand/03.webp')}}" alt="Business_client">
                    </div>
                    <div class="single">
                        <img src="{{asset('front/assets/images/brand/04.webp')}}" alt="Business_client">
                    </div>
                    <div class="single">
                        <img src="{{asset('front/assets/images/brand/05.webp')}}" alt="Business_client">
                    </div>
                    <div class="single">
                        <img src="{{asset('front/assets/images/brand/06.webp')}}" alt="Business_client">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rts-project-area rts-section-gap bg_project-5 bg_image">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-five center">
                    <span class="pre">Popular Projects</span>
                    <h2 class="title">Our Completed Projects</h2>
                </div>
            </div>
        </div>
        <div class="row mt--50">
            <div class="col-lg-12">
                <div class="project-swiper-5-area">
                    <div class="swiper mySwiper-project-five" dir="ltr">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="row g-5">
                                    <div class="col-lg-5">
                                        <div class="project-content-left-5">
                                            <div class="icon">
                                                <img src="{{asset('front/assets/images/project/01.svg')}}" alt="project">
                                            </div>
                                            <div class="title-area">
                                                <h6 class="title">Pro Business Solution</h6>
                                                <span>Case Study, Growth</span>
                                            </div>
                                            <div class="inner">
                                                <p class="disc">
                                                    Ornare etiam laoreet dictumst nisl quisque scelerisque cras ut
                                                    porta
                                                    interdum purus mattis iaculis litora turpis torquent posuere
                                                    sodales
                                                    himenaeos
                                                </p>
                                                <a href="project-details.html" class="rts-btn btn-primary">View
                                                    Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="thumbnail-project-5">
                                            <img src="{{asset('front/assets/images/project/11.webp')}}" alt="project">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row g-5">
                                    <div class="col-lg-5">
                                        <div class="project-content-left-5">
                                            <div class="icon">
                                                <img src="{{asset('front/assets/images/project/01.svg')}}" alt="project">
                                            </div>
                                            <div class="title-area">
                                                <h6 class="title">Best Business Solution</h6>
                                                <span>Case Study, Growth</span>
                                            </div>
                                            <div class="inner">
                                                <p class="disc">
                                                    Ornare etiam laoreet dictumst nisl quisque scelerisque cras ut
                                                    porta
                                                    interdum purus mattis iaculis litora turpis torquent posuere
                                                    sodales
                                                    himenaeos
                                                </p>
                                                <a href="project-details.html" class="rts-btn btn-primary">View
                                                    Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="thumbnail-project-5">
                                            <img src="{{asset('front/assets/images/project/11.webp')}}" alt="project">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row g-5">
                                    <div class="col-lg-5">
                                        <div class="project-content-left-5">
                                            <div class="icon">
                                                <img src="{{asset('front/assets/images/project/01.svg')}}" alt="project">
                                            </div>
                                            <div class="title-area">
                                                <h6 class="title">Pro Business Solution</h6>
                                                <span>Case Study, Growth</span>
                                            </div>
                                            <div class="inner">
                                                <p class="disc">
                                                    Ornare etiam laoreet dictumst nisl quisque scelerisque cras ut
                                                    porta
                                                    interdum purus mattis iaculis litora turpis torquent posuere
                                                    sodales
                                                    himenaeos
                                                </p>
                                                <a href="project-details.html" class="rts-btn btn-primary">View
                                                    Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="thumbnail-project-5">
                                            <img src="{{asset('front/assets/images/project/11.webp')}}" alt="project">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination-fraction"></div>
                        <div class="swiper-button-next"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                        <div class="swiper-button-prev"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

        <!-- tectimonisl-area start -->
        <div class="rts-testimonials-area-five rts-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-between-area" dir="ltr">
                            <div class="title-style-five">
                                <span class="pre">Our Testimonials</span>
                                <h2 class="title rts-text-anime-style-1">Our Customer Feedbacks
                                </h2>
                            </div>
                            <div class="pagination-wrapper">
                                <div class="swiper-button-prevs"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
                                <div class="swiper-pagination-fractions"></div>
                                <div class="swiper-button-nexts"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--10">
                    <div class="col-lg-12">
                        <div class="swiper mySwiper-testimonials-5" dir="ltr">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="single-testimonials-style-five">
                                        <div class="thumbnail">
                                            <img src="{{ asset('front/assets/images/testimonials/03.webp') }}" alt="testimoanils">
                                        </div>
                                        <div class="inner-content">
                                            <div class="name-area">
                                                <h5 class="title">Mr. Mike</h5>
                                                <span>Finance</span>
                                            </div>
                                            <p class="disc">
                                                “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                                dictums augue
                                                volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                            </p>
                                            <div class="body-end">
                                                <a href="#"><img src="{{ asset('front/assets/images/testimonials/icons/03.webp') }}"
                                                        alt="Client_logo"></a>
                                                <div class="star-icon">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-testimonials-style-five">
                                        <div class="thumbnail">
                                            <img src="{{ asset('front/assets/images/testimonials/04.webp') }}" alt="testimoanils">
                                        </div>
                                        <div class="inner-content">
                                            <div class="name-area">
                                                <h5 class="title">Jonathon Doe</h5>
                                                <span>Finance</span>
                                            </div>
                                            <p class="disc">
                                                “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                                dictums augue
                                                volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                            </p>
                                            <div class="body-end">
                                                <a href="#"><img src="{{ asset('front/assets/images/testimonials/icons/02.webp') }}"
                                                        alt="Client_logo"></a>
                                                <div class="star-icon">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-testimonials-style-five">
                                        <div class="thumbnail">
                                            <img src="{{ asset('front/assets/images/testimonials/03.webp') }}" alt="testimoanils">
                                        </div>
                                        <div class="inner-content">
                                            <div class="name-area">
                                                <h5 class="title">Jonathon Doe</h5>
                                                <span>Finance</span>
                                            </div>
                                            <p class="disc">
                                                “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                                dictums augue
                                                volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                            </p>
                                            <div class="body-end">
                                                <a href="#"><img src="{{ asset('front/assets/images/testimonials/icons/03.webp') }}"
                                                        alt="Client_logo"></a>
                                                <div class="star-icon">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
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
        </div>
        <!-- tectimonisl-area end -->


        <div class="rts-blog-area rts-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-style-five center">
                            <span class="pre">Blog & Article</span>
                            <h2 class="title">Recent blog post</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--20">
                    <!-- single Post Start -->
                    <div class="col-lg-4 col-md-6" data-animation="fadeInUp" data-delay="0.0" data-duration="1.2">
                        <!-- single Post blog large -->
                        <div class="rts-blog-h-2-wrapper">
                            <a href="blog-details.html" class="thumbnail">
                                <img src="{{ asset('front/assets/images/blog/04.webp') }}" alt="Business_blog">
                            </a>
                            <div class="body">
                                <span>Business Solution / by David Dolean</span>
                                <a href="blog-details.html">
                                    <h4 class="title">Building a Brand That from Market Leaders</h4>
                                </a>
                                <a class="rts-read-more btn-primary" href="blog-details.html"><i
                                        class="far fa-arrow-right"></i>Read
                                    More</a>
                            </div>
                        </div>
                        <!-- single Post blog large End -->
                    </div>
                    <!-- single Post End -->
                    <!-- single Post Start -->
                    <div class="col-lg-4 col-md-6" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                        <!-- single Post blog large -->
                        <div class="rts-blog-h-2-wrapper">
                            <a href="blog-details.html" class="thumbnail">
                                <img src="{{ asset('front/assets/images/blog/05.webp') }}" alt="Business_blog">
                            </a>
                            <div class="body">
                                <span>Business Solution / by David Dolean</span>
                                <a href="blog-details.html">
                                    <h4 class="title">Transforming Your Approach to Business</h4>
                                </a>
                                <a class="rts-read-more btn-primary" href="blog-details.html"><i
                                        class="far fa-arrow-right"></i>Read
                                    More</a>
                            </div>
                        </div>
                        <!-- single Post blog large End -->
                    </div>
                    <!-- single Post End -->
                    <!-- single Post Start -->
                    <div class="col-lg-4 col-md-6" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                        <!-- single Post blog large -->
                        <div class="rts-blog-h-2-wrapper">
                            <a href="blog-details.html" class="thumbnail">
                                <img src="{{ asset('front/assets/images/blog/06.webp') }}" alt="Business_blog">
                            </a>
                            <div class="body">
                                <span>Business Solution / by David Dolean</span>
                                <a href="blog-details.html">
                                    <h4 class="title">The quick settle tips of the new ages exist </h4>
                                </a>
                                <a class="rts-read-more btn-primary" href="blog-details.html"><i
                                        class="far fa-arrow-right"></i>Read
                                    More</a>
                            </div>
                        </div>
                        <!-- single Post blog large End -->
                    </div>
                    <!-- single Post End -->
                </div>
            </div>
        </div>



        <div class="rts-cta-area-one rts-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cta-main-area-wrapper-one bg_image">
                            <div class="left-areas">
                                <span class="pre">Latest Business Ideas</span>
                                <h3 class="title">Sign Up Newsletter</h3>
                            </div>
                            <div class="right-area">
                                <div class="inpur-area-main">
                                    <input type="text" placeholder="Enter Email Address">
                                    <button class="rts-btn btn-primary">Subscribe Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

@endsection