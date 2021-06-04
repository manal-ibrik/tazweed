@extends('layout.master')
@section('content')
<div class="page_wrapper">
    <div class="side_bar">
        <div class="logo">
            <a href="#"><img src="{{asset('assets/images/logo.png')}}" alt="logo" /></a>
        </div>
    </div>
    <div class="right_bar">
        <div class="contact_page">
            <div class="page_banner">
                <img src="{{asset('assets/images/contact-banner.png')}}">
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 col-sm-6 pl-0">
                        <div class="contact_address">
                            <address>
                                {!! $contact_us_address !!}
                            </address>
                            <div class="map_div">
                                <iframe src="{{$contact_us_map}}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-6">
                        <form action="{{route('contactus.store')}}" method="POST">
                            @csrf
                            <div class="contact_form">
                                <p>Please feel free to reach out to us anytime. Our team is here to answer questions and will respond promptly to your inquiries.</p>
                                <div class="contact_input">
                                    <input type="text" name="name" placeholder="Name">
                                </div>
                                <div class="contact_input">
                                    <input type="text" name="email" placeholder="Email">
                                </div>
                                <div class="contact_input">
                                    <textarea placeholder="Message" name="msj">
                                    
                                    </textarea>
                                </div>
                                <div class="contact_input">
                                    <input type="submit" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@stop