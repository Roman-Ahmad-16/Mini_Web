@extends('front.home.layouts.master')
@section('title', 'Services')

@section('content')

    <div class="rts-service-area rts-section-gap  bg-light">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-between-hr">
                        <div class="title-area-hr-left">
                            <span class="pre">
                                Our Service
                            </span>
                            <h2 class="title rts-text-anime-style-1">
                                Comprehensive HR Solutions <br> for Every Stage of Growth
                            </h2>
                        </div>
                        <a href="#" class="rts-btn btn-primary btn-border">View All Service</a>
                    </div>
                </div>
            </div>

            <div class="row g-5 mt--40">

                @foreach ($services as $service)

                    <div class="col-xl-4 col-lg-6 col-sm-12" data-animation="fadeInUp" data-delay="0.1" data-duration="1.2">
                        <div class="single-service-hr">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset($service->thumbnail) }}" alt="service">
                            </a>
                            <div class="inner">
                                <div class="icon-area">
                                    <i class="{{ $service->icon }}"></i>
                                </div>
                                <a href="#">
                                    <h3 class="title">{{$service->title}}</h3>
                                </a>
                                <p class="disc">
                                    {{$service->description}}
                                </p>
                                <a href="{{ route('front.serviceDetail' , $service->id) }}" class="rts-btn btn-primary btn-white">Read More</a>
                            </div>
                        </div>
                    </div>

                @endforeach


            </div>
        </div>
    </div>
@endsection