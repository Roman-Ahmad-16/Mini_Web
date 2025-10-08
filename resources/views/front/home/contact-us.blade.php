@extends('front.home.layouts.master')
@section('content')
 


 <div class="rts-breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">Contact</span>
                        <h1 class="title rts-text-anime-style-1">
                            Contact Us
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img src="{{ asset('front/assets/images/about/shape/01.png') }}" alt="shape" class="one">
            <img src="{{ asset('front/assets/images/about/shape/02.png') }}"alt="shape" class="two">
            <img src="{{ asset('front/assets/images/about/shape/03.png') }}" alt="shape" class="three">
        </div>
    </div>
<!-- rts about area stat -->
    <div class="rts-about-area-start rts-section-gapBottom" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail-about-10-wrapper">
                        <img src="{{ asset('front/assets/images/about/15.webp') }}" alt="abotu">
                        <div class="top-counter-area">
                            <div class="icon">
                                <img src="{{ asset('front/assets/images/about/icons/08.svg') }}" alt="about">
                            </div>
                            <h2 class="counter title"><span class="odometer" data-count="25">00</span>+
                            </h2>
                            <p>Business Solution</p>
                        </div>
                        <div class="top-counter-area bottom">
                            <div class="icon">
                                <img src="{{ asset('front/assets/images/about/icons/09.svg') }}" alt="about">
                            </div>
                            <h2 class="counter title"><span class="odometer" data-count="567">00</span>+
                            </h2>
                            <p>Skilled Experts</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt_md--50 mt_sm--50">
                    <div class="about-area-wrapper-content-10">
                        <div class="title-style-10 left">
                            <span class="pre">Easy Business Solution</span>
                            <h2 class="title rts-text-anime-style-1">Your Partner Better <br> Business Deals</h2>
                        </div>
                        <p class="disc">
                            We are the leading agency dedicated to enhancing your deals, driving growth, and delivering
                            exceptional results. Trust us to maximize your potential and take your business to the next
                            level
                        </p>
                        <div class="progress-wrapper-about-4">

                            <div class="single-progress">
                                <h6 class="title">Business Solution</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s"
                                        data-wow-delay=".3s" role="progressbar" style="width: 88%" aria-valuenow="88"
                                        aria-valuemin="0" aria-valuemax="88">
                                    </div>
                                    <span class="progress-number">88%</span>
                                </div>
                            </div>
                            <div class="single-progress">
                                <h6 class="title">Financial Support</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s"
                                        data-wow-delay=".3s" role="progressbar" style="width: 77%" aria-valuenow="77"
                                        aria-valuemin="0" aria-valuemax="77">
                                    </div>
                                    <span class="progress-number">77%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
         <!-- why choose us isko why choose us or yaha use krna to ok  area start -->
    <div class="why-choose-us-area rts-section-gapBottom rts_jump_animation-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-four center">
                        <span class="pre">Easy Business Solution</span>
                        <h2 class="title rts-text-anime-style-1">What We <span>Do</span></h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <div class="col-lg-4 col-md-6 col-sm-12 rts-jump__item">
                    <div class="single-why-choose-four">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('front/assets/images/why-choose/04.webp') }}" alt="choose">
                        </a>
                        <div class="inner-content">
                            <div class="icon">
                                <img src="{{ asset('frontassets/images/why-choose/icons/01.svg') }}" alt="why-choose">
                            </div>
                            <a href="#">
                                <h5 class="title">Business Consultancy</h5>
                            </a>
                            <p class="disc">
                                Creativity, and a commitment to quality to deliver solutions meet your unique needs.
                            </p>
                            <a href="#" class="read-more">Read More <i
                                    class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 rts-jump__item">
                    <div class="single-why-choose-four">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('front/assets/images/why-choose/05.webp') }}" alt="choose">
                        </a>
                        <div class="inner-content">
                            <div class="icon">
                                <img src="{{ asset('front/assets/images/why-choose/icons/02.svg') }}" alt="why-choose">
                            </div>
                            <a href="#">
                                <h5 class="title">Target Marketing</h5>
                            </a>
                            <p class="disc">
                                Creativity, and a commitment to quality to deliver solutions meet your unique needs.
                            </p>
                            <a href="#" class="read-more">Read More <i
                                    class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 rts-jump__item">
                    <div class="single-why-choose-four">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('front/assets/images/why-choose/06.webp') }}" alt="choose">
                        </a>
                        <div class="inner-content">
                            <div class="icon">
                                <img src="{{ asset('front/assets/images/why-choose/icons/03.svg') }}" alt="why-choose">
                            </div>
                            <a href="#">
                                <h5 class="title">Investment Analysis</h5>
                            </a>
                            <p class="disc">
                                Creativity, and a commitment to quality to deliver solutions meet your unique needs.
                            </p>
                            <a href="#" class="read-more">Read More <i
                                    class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- why choose us area end -->
    <!-- rts about area end -->
     <div class="row rts-section-gap">
                <div class="col-lg-12">
                    <div class="service-bottom-cta">
                        <h5 class="title">Do You Need Any Kind Of Work?</h5>
                        <div class="right">
                            <p>Call Us Anytime! <a href="#">+(125) 2153-2158</a></p>
                        </div>
                        <div class="mid-image">
                            <img src="{{ asset('front/assets/images/service/01.png') }}" alt="service_image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
        <!-- eorking process areas start -->
        <div class="working-process-one bg-main rts-section-gap without-clip-radious">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="title-style-one">
                            <span class="pre">How we works</span>
                            <h2 class="title rts-text-anime-style-1">Easy 3 Steps To Work
                            </h2>
                        </div>
                        <div class="working-process-main-wrapper mt--60">
                            <div class="single-working-process-one" data-animation="fadeInUp" data-delay="0.2"
                                data-duration="1.2">
                                <div class="left">
                                    <div class="icon">
                                        <img src="{{ asset('front/assets/images/process/icon/01.svg') }}" alt="process">
                                    </div>
                                </div>
                                <div class="inner-content">
                                    <div class="number-main">
                                        <span class="number">01</span>
                                    </div>
                                    <h5 class="title">Client Discovery</h5>
                                    <p class="disc">
                                        The agency begins by understanding the
                                        client's needs, goals, and
                                    </p>
                                </div>
                            </div>
                            <div class="single-working-process-one" data-animation="fadeInUp" data-delay="0.2"
                                data-duration="1.2">
                                <div class="left">
                                    <div class="icon">
                                        <img src="{{ asset('front/assets/images/process/icon/02.svg') }}" alt="process">
                                    </div>
                                </div>
                                <div class="inner-content">
                                    <div class="number-main">
                                        <span class="number">02</span>
                                    </div>
                                    <h5 class="title">Research & Analysis</h5>
                                    <p class="disc">
                                        The agency begins by understanding the
                                        client's needs, goals, and
                                    </p>
                                </div>
                            </div>
                            <div class="single-working-process-one" data-animation="fadeInUp" data-delay="0.2"
                                data-duration="1.2">
                                <div class="left">
                                    <div class="icon">
                                        <img src="{{ asset('front/assets/images/process/icon/03.svg') }}" alt="process">
                                    </div>
                                </div>
                                <div class="inner-content">
                                    <div class="number-main">
                                        <span class="number">03</span>
                                    </div>
                                    <h5 class="title">Strategy Development</h5>
                                    <p class="disc">
                                        The agency begins by understanding the
                                        client's needs, goals, and
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumbnail-working-procss-one" data-animation="zoomOut" data-delay="0.2"
                            data-duration="1.2">
                            <img src="{{ asset('front/assets/images/process/02.webp') }}" alt="working-process">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- eorking process areas end -->
         
          <!-- appoinment  area start -->
        <div class="appoinment-area-seven bg_image ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="appoinment-main-wrapper-7">
                            <form action="#">
                                <span>Make an Appointment</span>
                                <h4 class="title">Request a free quote</h4>
                                <div class="input-half-wrapper">
                                    <div class="signle-input">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                    <div class="signle-input">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="signle-input">
                                    <input type="text" placeholder="Your Name">
                                </div>
                                <div class="signle-input">
                                    <textarea placeholder="Type Your Message"></textarea>
                                </div>
                                <button class="btn-primary rts-btn ">Submit Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- appoinment  area end -->

















































    <!-- contact areas main -
    <div class="rts-contact-area-in-page" data-animation="fadeInUp" data-delay="0.2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-info-area-wrapper-p new">
                        <div class="single-contact-info">
                            <div class="icon">
                                <i class="fa-solid fa-phone-flip"></i>
                            </div>
                            <div class="info-wrapper">
                                <span>Call Us 24/7</span>
                                <a href="#">(+256) 2145.2156</a>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="info-wrapper">
                                <span>Work with us</span>
                                <a href="#">info@Invena.com</a>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="info-wrapper">
                                <span>Our Location</span>
                                <a href="#">125 Town, United State</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form-p new">
                        <form class="form__content" method="post" action="mailer.php" id="contact-form">
                            <h4 class="title">Get In Touch</h4>
                            <input name="name" id="name" type="text" placeholder="Your Name">
                            <input type="email" name="email" id="email" placeholder="Johndoe@gmail.com">
                            <textarea name="message" id="message" placeholder="Message"></textarea>

                            <button class="rts-btn btn-primary" type="submit">Get In Touch</button>
                        </form>
                        <div id="form-messages"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     contact areas main end -
      <div class="rts-breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">Contact</span>
                        <h1 class="title rts-text-anime-style-1">
                            Contact Us
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img src="{{ asset('front/assets/images/about/shape/01.png') }}" alt="shape" class="one">
            <img src="{{ asset('front/assets/images/about/shape/02.png') }}" alt="shape" class="two">
            <img src="{{ asset('front/assets/images/about/shape/03.png') }}" alt="shape" class="three">
        </div>
    </div>


     contact areas main -
    <div class="rts-contact-area-in-page" data-animation="fadeInUp" data-delay="0.2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="contact-info-area-wrapper-p">
                        <div class="single-contact-info">
                            <div class="icon">
                                <i class="fa-solid fa-phone-flip"></i>
                            </div>
                            <div class="info-wrapper">
                                <span>Call Us 24/7</span>
                                <a href="#">(+256) 2145.2156</a>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="info-wrapper">
                                <span>Work with us</span>
                                <a href="#">info@Invena.com</a>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="info-wrapper">
                                <span>Our Location</span>
                                <a href="#">125 Town, United State</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="thumbnail-contact-form">
                        <img src="assets/images/contact/01.webp" alt="contact">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-form-p">
                        <form class="form__content" method="post" action="mailer.php" id="contact-form">
                            <h4 class="title">Get In Touch</h4>
                            <input name="name" id="name" type="text" placeholder="Your Name">
                            <input type="email" name="email" id="email" placeholder="Johndoe@gmail.com">
                            <textarea name="message" id="message" placeholder="Message"></textarea>

                            <button class="rts-btn btn-primary" type="submit">Get In Touch</button>
                        </form>
                        <div id="form-messages"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     contact areas main end -

   








    <div class="rts-brand-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-list-area-wrapper">
                        <div class="left-paragraph">
                            <p>Our Trusted Clients</p>
                        </div>
                        <div class="right-brand-area-wrapper">
                            <div class="single-image">
                                <img src="{{ asset('front/assets/images/brand/01.webp') }}"alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="{{ asset('front/assets/images/brand/02.webp') }}"alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="{{ asset('front/assets/images/brand/03.webp') }}"alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="{{ asset('front/assets/images/brand/04.webp') }}"alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="{{ asset('front/assets/images/brand/05.webp') }}"alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="{{ asset('front/assets/images/brand/06.webp') }}"alt="brand">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     rts brand area end 


     rts cta area start -
    <div class="rts-cta-area-inner bg_image ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-inner-content-inner-page">
                        <div class="left-side-content">
                            <span>Subscribe Newsletter</span>
                            <h3 class="title">Stay Updated with <br> the Latest News!</h3>
                        </div>
                        <form action="#">
                            <input type="text" placeholder="Enter Email Address">
                            <button class="rts-btn btn-primary btn-white">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
     rts cta area end -->


@endsection

