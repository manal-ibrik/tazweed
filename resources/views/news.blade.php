@extends('layout.master')
@section('content')
<div class="page_wrapper">
    <div class="side_bar">
        <div class="logo">
            <a href="#"><img src="{{asset('assets/images/logo.png')}}" alt="logo" /></a>
        </div>
    </div>
    <div class="right_bar">
        <div class="products-details">
            <div class="container-fluid">
                @forelse($news as $new)
                <div class="row">
                    <div class="col-md-6 col-sm-6 p-0">
                        <div class="news_img">
                            <img src="{{asset($new->news_image)}}">
                        </div>	
                    </div>
                    <div class="col-md-6 col-sm-6 p-0">
                        <div class="news_content">
                            <h2>{{$new->news_title}}</h2>
                            <p>{{$new->news_description}}</p>
                            <a href="#" class="read_more">Read More</a>
                        </div>
                    </div>
                </div>
                @empty
                <h2>no news yet</h2>
                @endforelse
            </div>
        </div>
    </div>
</div>
@stop