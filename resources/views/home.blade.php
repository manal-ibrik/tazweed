@extends('layout.master_home')
@section('content')
<div class="page_wrapper">
    <div class="side_bar">
        <div class="logo">
            <a href="#"><img src="{{asset('assets/images/logo.png')}}" alt="logo" /></a>
        </div>
    </div>
    <div class="right_bar">
        <ul class="social_btn">
            <li><i class="sprite phone-icon"></i><a href="#">+971 55 456 8902</a></li>
            <li><i class="sprite whatsapp-icon"></i><a href="#">+971 55 456 8902</a></li>
            <li><i class="sprite mail-icon"></i><a href="#">Email</a></li>
            <li><i class="sprite instagram-icon"></i><a href="#">Instagram</a></li>
            <li><i class="sprite facebook-icon"></i><a href="#">Facebook</a></li>
        </ul>
        <div class="home_slider">	
            @forelse($homeSlider as $slider)
            <div class="home_slider_row"><img src="{{asset($slider->slider_image)}}" alt="home-banner" /></div>
            @empty
            <h2>no sliders yet</h2>
            @endforelse
        </div>
    </div>
</div>
@stop