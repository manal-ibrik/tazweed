@extends('layout.master')
@section('content')
<div class="page_wrapper">
    <div class="side_bar">
        <div class="logo">
            <a href="#"><img src="{{asset('assets/images/logo.png')}}" alt="logo" /></a>
        </div>
        <div id="menu-center" class="page_nav">
             @include('partials.solution_links')
        </div>
    </div>
    <div class="right_bar">
        <div class="page_banner">
            <img src="{{asset('assets/images/solutions-banner.png')}}">
        </div>	
        @forelse($solutions as $solution)
        <section class="page-section" id="{{$solution->id}}-section">
            <div class="page_content">
                <h2>{{$solution->solutions_title}}</h2>
                <p>{{$solution->solutions_description}}</p>
            </div>
        </section>
        @empty
        <h2>no pages yet</h2>
        @endforelse
    </div>
</div>
@stop