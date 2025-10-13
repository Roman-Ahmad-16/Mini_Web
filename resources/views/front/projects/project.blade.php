 @extends('front.home.layouts.master')
@section('title', 'projects')

@section('content')

 <!-- about us area wrapper main -->
    <div class="rts-breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center project-breadcrumb">
                        <span class="bg-title">Our Project</span>
                        <h1 class="title rts-text-anime-style-1">
                            Business Growth Check
                        </h1>
                        <p class="disc">
                            With a team of experienced professionals and a passion for innovation, we combine
                            cutting-edge strategies
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img src="assets/images/about/shape/01.png" alt="shape" class="one">
            <img src="assets/images/about/shape/02.png" alt="shape" class="two">
            <img src="assets/images/about/shape/03.png" alt="shape" class="three">
        </div>
    </div>
    <!-- about us area wrapper main end -->


    <!-- rts project details area start -->
    <div class="rts-project-details-area-end rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-details-main-inner">
                        <div class="project-details-thumbnail">
                            <img src="assets/images/project/18.webp" alt="project">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts project details area end -->



    <!-- case studies area start -->
    <div class="rts-case-studies-area rts-section-gapBottom project-inner-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs nav-project-tab" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">All Projects</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Business</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Solution</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contactone-tab" data-bs-toggle="tab"
                                data-bs-target="#contactone" type="button" role="tab" aria-controls="contactone"
                                aria-selected="false">Marketing</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row g-5 mt--10">
                                <div class="col-lg-6">
                                    <div class="single-project-style-three">
                                        <a href="#" class="thumbnail">
                                            <img src="assets/images/project/03.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4 class="title">Business Growth</h4>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-project-style-three">
                                        <a href="#" class="thumbnail">
                                            <img src="assets/images/project/04.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4 class="title">Startup Solution</h4>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-project-style-three">
                                        <a href="#" class="thumbnail">
                                            <img src="assets/images/project/05.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4 class="title">Growth Manage</h4>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-project-style-three">
                                        <a href="#" class="thumbnail">
                                            <img src="assets/images/project/06.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4 class="title">Company Skills</h4>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row g-5 mt--10">
                                <div class="col-lg-6">
                                    <div class="single-project-style-three">
                                        <a href="#" class="thumbnail">
                                            <img src="assets/images/project/03.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4 class="title">Business Growth</h4>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-project-style-three">
                                        <a href="#" class="thumbnail">
                                            <img src="assets/images/project/04.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4 class="title">Startup Solution</h4>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-project-style-three">
                                        <a href="#" class="thumbnail">
                                            <img src="assets/images/project/05.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4 class="title">Growth Manage</h4>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-project-style-three">
                                        <a href="#" class="thumbnail">
                                            <img src="assets/images/project/06.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4 class="title">Company Skills</h4>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row g-5 mt--10">
                                <div class="col-lg-6">
                                    <div class="single-project-style-three">
                                        <a href="#" class="thumbnail">
                                            <img src="assets/images/project/03.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4 class="title">Business Growth</h4>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-project-style-three">
                                        <a href="#" class="thumbnail">
                                            <img src="assets/images/project/04.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4 class="title">Startup Solution</h4>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-project-style-three">
                                        <a href="#" class="thumbnail">
                                            <img src="assets/images/project/05.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4 class="title">Growth Manage</h4>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-project-style-three">
                                        <a href="#" class="thumbnail">
                                            <img src="assets/images/project/06.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4 class="title">Company Skills</h4>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contactone" role="tabpanel" aria-labelledby="contactone-tab">
                            <div class="row g-5 mt--10">
                                <div class="col-lg-6">
                                    <div class="single-project-style-three">
                                        <a href="#" class="thumbnail">
                                            <img src="assets/images/project/03.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4 class="title">Business Growth</h4>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-project-style-three">
                                        <a href="#" class="thumbnail">
                                            <img src="assets/images/project/04.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4 class="title">Startup Solution</h4>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-project-style-three">
                                        <a href="#" class="thumbnail">
                                            <img src="assets/images/project/05.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4 class="title">Growth Manage</h4>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-project-style-three">
                                        <a href="#" class="thumbnail">
                                            <img src="assets/images/project/06.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4 class="title">Company Skills</h4>
                                            </a>
                                            <span>Business Strategy</span>
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
    <!-- case studies area end -->




    <div class="rts-brand-area rts-section-gapBottom">
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
    <!-- rts brand area end -->

    <!-- rts cta area start -->
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
    <!-- rts cta area end -->
     @endsection