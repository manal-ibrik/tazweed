@extends('layout.master')
@section('content')
<div class="page_wrapper">
    <div class="side_bar">
        <div class="logo">
            <a href="#"><img src="{{asset('assets/images/logo.png')}}" alt="logo" /></a>
        </div>
        <div class="product_seaech">
			<input type="text" name="" placeholder="Search Products">
			<button></button>
		</div>
		<div class="page_nav">
				<ul class="navigation">
					<li><a href="#1">All Products</a></li>
                    @foreach ($categories as $cat)
					    <li><a href="#{{$cat->id}}">{{$cat->name}}</a></li>
                    @endforeach
				</ul>
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

		<div class="page_banner">
			<img src="assets/images/products-banner.png">
		</div>	

        <div class="product_page">
            <div class="container-fluid pl-0">
                @foreach ($categories as $cat)
                    <section id="{{$cat->id}}">
                        <div class="company_name">
                            <h2>{{$cat->name}}</h2>
                        </div>
                        <div class="row justify-content-between">
                        @foreach ($cat->related_product() as $p)
                        <div class="col-md-4 col-sm-6">
                            <div class="product_info">
                                <a href="{{route('products.show', $p->id)}}">
                                <div class="product_img">	
                                    <img src="assets/images/taz_prod_sam_012t-405x405.jpg">
                                </div>
                                <h2>{{$p->name}}</h2>
                                </a>
                            </div>
                        </div>
                        @endforeach
                        </div>
                    </section>
                @endforeach

            </div>
        </div>	
	</div>
</div>
@stop