@extends('layout.master')
@section('content')
<div class="page_wrapper">
    <div class="side_bar">
        <div class="logo">
            <a href="#"><img src="{{asset('assets/images/logo.png')}}" alt="logo" /></a>
        </div>
        <div id="menu-center" class="page_nav">
            <ul>
                @forelse($services as $service)
                <li><a class="active" href="#{{$service->id}}-section">{{$service->services_title}}</a></li>
                @empty
                <h2>no pages yet</h2>
                @endforelse
            </ul>
        </div>
    </div>
    <div class="right_bar">
        <div class="page_banner">
            <img src="{{asset('assets/images/about-banner.png')}}">
        </div>	
        @forelse($services as $service)
        <section class="page-section" id="{{$service->id}}-section">
            <div class="page_content">
                <h2>{{$service->services_title}}</h2>
                <p>{{$service->services_description}}</p>
            </div>
        </section>
        @empty
        <h2>no pages yet</h2>
        @endforelse
    </div>
</div>
@stop