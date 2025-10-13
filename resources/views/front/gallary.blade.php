 @extends('front.home.layouts.master')
@section('title', 'Home')

 <!-- partners area breadcrumb area wrapper -->
    <div class="partner-breadcrumb bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">Gallery</span>
                        <h1 class="title">
                            Gallery
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partners area breadcrumb area end -->
     <!-- rts galllery area start -->
    <div class="rts-gallery-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-area-main-wrapper-4">
                        <div class="row g-5">
                            <div class="col-md-4">
                                <div class="single-gallery">
                                    <a href="assets/images/gallery/01.webp" class="thumbnail gallery-image">
                                        <img src="assets/images/gallery/01.webp" alt="gallery">
                                    </a>
                                    <div class="instagram">
                                        <img src="assets/images/gallery/instagram.svg" alt="instagram.svg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-gallery">
                                    <a href="assets/images/gallery/03.webp" class="thumbnail gallery-image">
                                        <img src="assets/images/gallery/03.webp" alt="gallery">
                                    </a>
                                    <div class="instagram">
                                        <img src="assets/images/gallery/instagram.svg" alt="instagram.svg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-gallery">
                                    <a href="assets/images/gallery/04.webp" class="thumbnail gallery-image">
                                        <img src="assets/images/gallery/04.webp" alt="gallery">
                                    </a>
                                    <div class="instagram">
                                        <img src="assets/images/gallery/instagram.svg" alt="instagram.svg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-gallery">
                                    <a href="assets/images/gallery/05.webp" class="thumbnail gallery-image">
                                        <img src="assets/images/gallery/05.webp" alt="gallery">
                                    </a>
                                    <div class="instagram">
                                        <img src="assets/images/gallery/instagram.svg" alt="instagram.svg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-gallery">
                                    <a href="assets/images/gallery/02.webp" class="thumbnail gallery-image">
                                        <img src="assets/images/gallery/02.webp" alt="gallery">
                                    </a>
                                    <div class="instagram">
                                        <img src="assets/images/gallery/instagram.svg" alt="instagram.svg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-gallery">
                                    <a href="assets/images/gallery/06.webp" class="thumbnail gallery-image">
                                        <img src="assets/images/gallery/06.webp" alt="gallery">
                                    </a>
                                    <div class="instagram">
                                        <img src="assets/images/gallery/instagram.svg" alt="instagram.svg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts galllery area end -->
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