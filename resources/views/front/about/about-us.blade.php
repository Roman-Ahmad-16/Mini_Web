@extends('front.home.layouts.master')
@section('title', 'About')

@section('content')

    @include('front.about.partials.banner')
    <br><br><br><br>

    @include('front.about.partials.about1')
    <br><br><br><br>

    @include('front.about.partials.mission')

    @include('front.about.partials.work_process')
    <br><br><br><br>

    <br><br><br><br>
    @include('front.about.partials.vision')

    @include('front.home.partials.testimonial')
    <br><br><br><br>

@endsection