 @extends('front.home.layouts.master')
@section('title', 'Home')

@section('content')

 
 
    <div class="rts-contact-page-form-area rts-section-gapTop account">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="mian-wrapper-form">
                        <div class="title-mid-wrapper-home-two sal-animate" data-sal="slide-up" data-sal-delay="150"
                            data-sal-duration="800">
                            <h2 class="title">Login</h2>
                        </div>
                        <form id="contact-form-contact" action="mailer.php" method="post">
                            <input type="email" name="email" placeholder="Email Address or Username" required="">
                            <input type="text" name="name" placeholder="Password" required="">
                            <div class="checkbox">
                                <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label
                                    for="rememberMe">Remember me</label>
                            </div>
                            <button type="submit" class="rts-btn btn-primary">Log In</button>
                            <div class="forgot-password">
                                <a href="#0">Forgot Your Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mian-wrapper-form">
                        <div class="title-mid-wrapper-home-two sal-animate" data-sal="slide-up" data-sal-delay="150"
                            data-sal-duration="800">
                            <h2 class="title">Registration</h2>
                        </div>
                        <form id="contact-form-contact" action="mailer.php" method="post">
                            <input type="text" name="name" placeholder="Your Name" required="">
                            <input type="email" name="email" placeholder="Email Address" required="">
                            <input type="text" name="name" placeholder="New Password" required="">
                            <input type="text" name="name" placeholder="Confirm Password" required="">
                            <button type="submit" class="rts-btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                                <img src="assets/images/brand/01.webp" alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="assets/images/brand/02.webp" alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="assets/images/brand/03.webp" alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="assets/images/brand/04.webp" alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="assets/images/brand/05.webp" alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="assets/images/brand/06.webp" alt="brand">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    @endsection
