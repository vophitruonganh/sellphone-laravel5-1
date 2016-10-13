@extends('home')

@section('main')
		<div id="wapper-main">
			<div id="group-product-title" class="navbar navbar-default">
				<div class="navbar-brand text-uppercase">
					{{ $cateories_name .' - '. $trademark_name }}
				</div>
			</div>
			<div class="row ">
				@foreach ($products as $product)
				    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				      <div class="subitem">
				        <a href="{{ URL::to('products/detail/'.$product->id) }}">
				            <img class="img-responsive img-resize" src=" {{ asset('images/product').'/'.$product->image }}" alt="" class="avata-product"/>
				        </a>

				        <h3 class="text-center text-uppercase title">
				            <a class=" text-info" href="{{ URL::to('products/detail/'.$product->id) }}">
				            	{{ strtoupper($product->name) }}
				            </a>
				        </h3>
				        <h4 class="subitem-price text-uppercase text-center">{{ number_format( $product->price) . ' VND'}}</h4>
				        <small class="info-products">During the early days of SSDs ,During the early days of SSDs During the early days of SSDs During the early days of SSDs .</small>
				        <div class="btn-group">
				          <a class="order-products-info btn btn-success" href="{{ URL::to('products/detail/'.$product->id) }}">BUY NOW</a>
				          <a class="more-products-info btn btn-danger" href="{{ URL::to('products/detail/'.$product->id) }}">DETAIL</a>
				        </div>
				      </div>
				    </div>
				@endforeach
			</div>
		</div>
@overwrite