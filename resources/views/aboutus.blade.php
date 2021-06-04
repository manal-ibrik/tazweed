@extends('layout.master')
@section('content')
<div class="page_wrapper">
    <div class="side_bar">
        <div class="logo">
            <a href="#"><img src="{{asset('assets/images/logo.png')}}" alt="logo" /></a>
        </div>
        <div id="menu-center" class="page_nav">
            @include('partials.about_links')
        </div>
    </div>
    <div class="right_bar">
        <div class="page_banner">
            <img src="{{asset('assets/images/about-banner.png')}}">
        </div>	
        @forelse($Abouts as $Abouts_page)
        <section class="page-section" id="{{$Abouts_page->id}}-section">
            <div class="page_content">
                <h2>{{$Abouts_page->abouts_title}}</h2>
                @if($Abouts_page->abouts_image != '')
                <div class="content_img">
                    <img src="{{asset($Abouts_page->abouts_image)}}">
                </div>
                @endif
                <p>{{$Abouts_page->abouts_description}}</p>
            </div>
        </section>
        @empty
        <h2>no pages yet</h2>
        @endforelse
    </div>
</div>
@stop