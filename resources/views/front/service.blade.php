@extends('front.home.layouts.master')
@section('title', 'Services')

@section('content')

    <div class="breadcrumb-service-detals-one">
        <div class="container-1754">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-inner-service-details-1 bg_image">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="title-area-left">
                                        <span class="bg-title">Business</span>
                                        <h1 class="title rts-text-anime-style-1">
                                            Our Services
                                        </h1>
                                        <p class="disc">
                                            Intrinsicly coordinate multifunctional functionalities reliable
                                            potentialities.
                                            Objectively envisioneer high in convergence through collaborative networks.
                                            Interactively generate B2C e-tailers for business data restore fully
                                            researched
                                            relationships through resource maximizing results.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('front.home.partials.service3')
    
    @include('front.about.partials.work_process')
    <br><br><br><br>
    @include('front.home.partials.testimonial')

    @include('front.home.partials.appointment')

@endsection