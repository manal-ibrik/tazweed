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
					    <li><a href="{{route('products.index')}}#{{$cat->id}}">{{$cat->name}}</a></li>
                    @endforeach
				</ul>
		</div>
    </div>
    <div class="right_bar">
		<div class="products-details">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-12 p-0">
						<div class="products-details-img">
							<img src="{{asset('assets/images/taz_prod_sam_012t-405x405.jpg')}}">
						</div>
					</div>
					<div class="col-md-6 col-sm-12 p-0">
						<div class="products-details-content">
							<h1>{{$product->name}}</h1>
							<p>{!! $product->short_description !!}</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="products-details-intro">
			<h2>{{$product->title}}</h2>
			<p>{!! $product->description !!}</p>
		</div>

	</div>
</div>
@stop