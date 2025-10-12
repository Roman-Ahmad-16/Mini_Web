@extends('front.home.layouts.master')
@section('title', 'Home')

@section('content')

    <body class="color-yellow-demo">



        <!-- rts banner area start -->
        <div class="rts-banner-area banner-accountent-bg rts-section-gap bg_image">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-2 order-md-2 order-sm-2 order-lg-1">
                        <div class="banner-accountent-content">
                            <span class="pre-title">
                                <img src="assets/images/banner/icon/03.svg" alt="">
                                Accounting & Tax Services
                            </span>
                            <h1 class="title">Charlotte Emma</h1>
                            <p class="disc">
                                Porttitor ornare fertum aliquam pharetra facilisis gravida risus suscipit Dui feugiat fusce
                                conubia ridiculus tristique parturient
                            </p>
                            <div class="button-wrapper">
                                <a href="#" class="rts-btn btn-primary">Get A Free Quote</a>
                                <a href="#" class="rts-btn btn-primary btn-border">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-md-1 order-sm-1 order-lg-2">
                        <div class="thumbnail-banner-area-accountent">
                            <img src="assets/images/banner/27.webp" alt="banner">
                            <div class="absolute-rating-area">
                                <img src="assets/images/banner/small-img/03.png" alt="small-image">
                                <div class="stars-area">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <span>50 Review</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts banner area end -->

        <!-- rts service area start -->
        <div class="rts-service-area rts-section-gap">
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
                                <img src="assets/images/service/icons/08.svg" alt="service">
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
                                <img src="assets/images/service/icons/09.svg" alt="service">
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
                                <img src="assets/images/service/icons/10.svg" alt="service">
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

        @include('front.home.partials.why_us_2')

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
                                <img src="assets/images/brand/01.webp" alt="Business_client">
                            </div>
                            <div class="single">
                                <img src="assets/images/brand/02.webp" alt="Business_client">
                            </div>
                            <div class="single">
                                <img src="assets/images/brand/03.webp" alt="Business_client">
                            </div>
                            <div class="single">
                                <img src="assets/images/brand/04.webp" alt="Business_client">
                            </div>
                            <div class="single">
                                <img src="assets/images/brand/05.webp" alt="Business_client">
                            </div>
                            <div class="single">
                                <img src="assets/images/brand/06.webp" alt="Business_client">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


       @include('front.home.partials.testimonial_7')


        <!-- appoinment contact area start -->
        <div class="contactform-accountentarea rts-section-gap bg_image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="appoinment-area-accountent">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="appoinment-left">
                                        <div class="easy-contact-left-funfacts-8 mr--0">

                                            <span class="pre">Get In Touch</span>
                                            <h3 class="title">Get a Dedicated <br> Account Manager</h3>
                                            <div class="signle-contact">
                                                <div class="icon">
                                                    <i class="fa-solid fa-phone"></i>
                                                </div>
                                                <div class="main-contact">
                                                    <span>Call Us 24/7</span>
                                                    <a href="#">(+256) 2145.2156</a>
                                                </div>
                                            </div>
                                            <div class="signle-contact">
                                                <div class="icon">
                                                    <i class="fa-solid fa-envelope"></i>
                                                </div>
                                                <div class="main-contact">
                                                    <span>Work with us</span>
                                                    <a href="#">info@Invena.com</a>
                                                </div>
                                            </div>
                                            <div class="signle-contact">
                                                <div class="icon">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="main-contact">
                                                    <span>Our Location</span>
                                                    <a href="#">XYZ Hilton Street, 125 Town <br>
                                                        United State</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <form action="#" class="form-area-right">
                                        <div class="input-wrapper">
                                            <div class="single-input">
                                                <label for="name">Your Name</label>
                                                <input id="name" type="text" value="Jonathon Doe">
                                            </div>
                                            <div class="single-input">
                                                <label for="phone">Your Phone</label>
                                                <input id="phone" type="text" value="+657890887567">
                                            </div>
                                        </div>
                                        <div class="input-wrapper">
                                            <div class="single-input">
                                                <label for="email">Email Address</label>
                                                <input id="email" type="email" placeholder="Email Address" required>
                                            </div>
                                            <div class="single-input">
                                                <label for="">Service interested in</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="single-input">
                                            <label for="subject">subject Address</label>
                                            <input id="subject" type="text" placeholder="Personal Tex Planning">
                                        </div>
                                        <div class="single-input">
                                            <label for="message">How can we help?</label>
                                            <textarea id="message" placeholder="How can we help?"></textarea>
                                        </div>
                                        <button class="rts-btn btn-primary mt--25">Submit Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- appoinment contact area end -->



    @include('front.home.partials.blogs_6')



      @include('front.home.partials.cta')
        <button class="close-icon-menu" title="Close menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="index.html"><img class="logo" src="assets/images/logo/01.svg" alt="finbiz_logo"></a>
            <div class="body d-none d-xl-block">
                <p class="disc">
                    We must explain to you how all seds this mistakens idea denouncing pleasures and praising account.
                    All seds this mistakens idea denouncing pleasures.
                </p>
                <div class="get-in-touch">
                    <!-- title -->
                    <div class="h6 title">Get In Touch</div>
                    <!-- title End -->
                    <div class="wrapper">
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-phone-alt"></i>
                            <a href="#">+8801234566789</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-envelope"></i>
                            <a href="#">example@gmail.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-globe"></i>
                            <a href="#">www.webexample.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="#">13/A, New Pro State, NYC</a>
                        </div>
                        <!-- single ENd -->
                    </div>
                    <div class="social-wrapper-two menu">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                        <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu d-block d-xl-none">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li class="has-droupdown">
                        <a href="#" class="main" aria-expanded="false">Demos</a>
                        <ul class="submenu mm-collapse" style="height: 0px;">
                            <li><a href="index.html">Business One</a></li>
                            <li><a href="index-two.html">Business Two</a></li>
                            <li><a href="index-three.html">Business Three</a></li>
                            <li><a href="index-four.html">Business Four</a></li>
                            <li><a href="index-five.html">Finance Demo</a></li>
                            <li><a href="index-six.html">Marketing agency</a></li>
                            <li><a href="index-seven.html">Business agency</a></li>
                            <li><a href="index-eight.html">Business Management</a></li>
                            <li><a href="index-nine.html">Insurance Home</a></li>
                            <li><a href="index-ten.html">Business Website</a></li>
                            <li><a href="index-eleven.html">Business Parallax</a></li>
                            <li><a href="index-twelve.html">Business Video</a></li>
                            <li><a href="index-thirteen.html">Accountent One</a></li>
                            <li><a href="index-fourteen.html">Accountent Two</a></li>
                            <li><a href="index-fifteen.html">HR Website</a></li>
                            <li><a href="index-sixteen.html">Business Coach</a></li>
                            <li><a href="index-seventeen.html">SEO Website</a></li>
                            <li><a href="index-eighteen.html">Technology Demo</a></li>
                            <li><a href="index-nineteen.html">Business Investment</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main" aria-expanded="false">Onepage</a>
                        <ul class="submenu mm-collapse" style="height: 0px;">
                            <li><a href="onepage-one.html">Business One</a></li>
                            <li><a href="onepage-two.html">Business Two</a></li>
                            <li><a href="onepage-three.html">Business Three</a></li>
                            <li><a href="onepage-four.html">Business Four</a></li>
                            <li><a href="onepage-five.html">Finance Demo</a></li>
                            <li><a href="onepage-six.html">Marketing agency</a></li>
                            <li><a href="onepage-seven.html">Business agency</a></li>
                            <li><a href="onepage-eight.html">Business Management</a></li>
                            <li><a href="onepage-nine.html">Insurance Home</a></li>
                            <li><a href="onepage-ten.html">Business Website</a></li>
                            <li><a href="onepage-eleven.html">Business Parallax</a></li>
                            <li><a href="onepage-twelve.html">Business Video</a></li>
                            <li><a href="onepage-thirteen.html">Accountent One</a></li>
                            <li><a href="onepage-fourteen.html">Accountent Two</a></li>
                            <li><a href="onepage-fifteen.html">HR Website</a></li>
                            <li><a href="onepage-sixteen.html">Business Coach</a></li>
                            <li><a href="onepage-eighteen.html">Technology Demo</a></li>
                            <li><a href="onepage-nineteen.html">Business Investment</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main" aria-expanded="false">Pages</a>
                        <ul class="submenu mm-collapse" style="height: 0px;">
                            <li><a href="about.html">About
                                    Company</a></li>
                            <li><a href="service.html">Service</a></li>
                            <li><a href="service-details.html">Service
                                    Details</a>
                            </li>
                            <li><a href="service-details-2.html">Service
                                    Details 2</a>
                            </li>
                            <li><a href="project.html">Project</a>
                            </li>
                            <li><a href="team.html">Team</a>
                            </li>
                            <li><a href="team-details.html">Team
                                    Details</a>
                            </li>
                            <li><a href="pricing.html">Pricing</a>
                            </li>
                            <li><a href="appoinment.html">Appoinment</a>
                            </li>
                            <li><a href="history.html">Our
                                    History</a>
                            </li>
                            <li><a href="blog-list.html">Blog
                                    List</a>
                            </li>
                            <li><a href="blog-grid.html">Blog
                                    List</a>
                            </li>
                            <li><a href="blog-details.html">Blog
                                    Details</a>
                            </li>
                            <li><a href="blog-details-2.html">Blog
                                    Details 02</a>
                            </li>
                            <li><a href="faq.html">Faq's</a>
                            <li><a href="career.html">Career</a>
                            </li>
                            <li><a href="our-mission.html">Our
                                    Mission</a>
                            </li>
                            <li><a href="partners.html">Partners</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main" aria-expanded="false">Services</a>
                        <ul class="submenu mm-collapse" style="height: 0px;">
                            <li><a class="mobile-menu-link" href="service.html">Service</a></li>
                            <li><a class="mobile-menu-link" href="service-details.html">Service Details</a></li>
                            <li><a class="mobile-menu-link" href="service-details-2.html">Service Details 2</a></li>
                            <li><a class="mobile-menu-link" href="service-details-3.html">Service Details 3</a></li>
                            <li><a class="mobile-menu-link" href="service-details-4.html">Service Details 4</a></li>
                            <li><a class="mobile-menu-link" href="service-details-5.html">Service Details 5</a></li>

                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main" aria-expanded="false">Projects</a>
                        <ul class="submenu mm-collapse">
                            <li><a href="project.html">Project</a>
                            </li>
                            <li><a href="project-slider.html">Project
                                    Slider</a></li>
                            <li><a href="project-slider-2.html">Project
                                    Slider 2</a></li>
                            <li><a href="project-card-slider.html">Project
                                    Card Slider</a></li>
                            <li><a href="project-bg-dark.html">Project
                                    Bg Dark</a></li>
                            <li><a href="project-grid.html">Project
                                    Grid</a></li>
                            <li><a href="project-grid-col-2.html">Project
                                    Grid Col 2</a></li>
                            <li><a href="project-slider-grid.html">Grid Slider</a></li>
                            <li><a href="project-slider-overflow.html">Project Overflow</a>
                            </li>
                            <li><a href="project-grid-col-3.html">Project Grid Col 3</a>
                            </li>
                            <li><a href="project-bg-dark.html">Project
                                    Hide Content</a></li>


                            <li><a href="project-slider-2.html">Project
                                    Hide
                                    Content wide</a>
                            </li>
                            <li><a href="project-grid.html">Project
                                    Card Hover</a>
                            </li>
                            <li><a href="project-slider-2.html">Project
                                    Slider Image
                                    Zoom</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main" aria-expanded="false">Shop Pages</a>
                        <ul class="submenu mm-collapse">
                            <li><a href="shop.html">Shop</a>
                            </li>
                            <li><a href="shop-single.html">Shop
                                    Details</a>
                            </li>
                            <li><a href="account.html">Account</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main" aria-expanded="false">Blog</a>
                        <ul class="submenu mm-collapse">
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-list.html">Blog List</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                            <li><a href="blog-details-2.html">Blog Details 2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html" class="main" aria-expanded="false">Contact Us</a>
                    </li>
                </ul>
            </nav>

            <div class="social-wrapper-one">
                <ul>
                    <li>
                        <a href="#" aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" aria-label="twitter">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" aria-label="youtube">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" aria-label="linkedin">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- mobile menu area end -->

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


    </body>
@endsection