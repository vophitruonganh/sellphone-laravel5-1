<!DOCTYPE html>
<html>
		<head>
             @section('head')
                <meta charset="utf-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}" />
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
                <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"/>
                <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.theme.css')}}"/>
                <link rel="stylesheet" type="text/css" href="{{asset('css/style-global.css')}}">
                <link rel="stylesheet" type="text/css" href="{{asset('css/product-detail.css')}}" />
                <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}" />
                <link rel="stylesheet" type="text/css" href="{{asset('css/demo.css')}}" />
                <link rel="stylesheet" type="text/css" href="{{asset('css/slicebox.css')}}" />
                <link rel="stylesheet" type="text/css" href="{{asset('css/js-image-slider.css')}}">

                <script type="text/javascript" src="{{asset('js/js-image-slider.js')}}"></script>
                <script type="text/javascript" src="{{asset('js/jquery-1.8.2.min.js')}}"></script>
                <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
                <script type="text/javascript" src="{{asset('js/modernizr.custom.46884.js')}}"></script>
                <script type="text/javascript" src="{{asset('js/slicebox-customs.js')}}"></script>
                <script type="text/javascript" src="{{asset('js/slicebox-customs.js')}}"></script>
                <script type="text/javascript" src="{{asset('js/js-live-search.js')}}"></script>
                <script type="text/javascript" src="{{asset('js/js-login.js')}}"></script>
                <script type="text/javascript" src="{{asset('js/js-customer-order.js')}}"></script>
                <script type="text/javascript" src="{{asset('js/bootstrap-valadation.js')}}"></script>
            @show
            <title>
                @section('title')
                    DIGITALZONE
                @show
            </title>
	    </head>

    <body>
        <div id="wapper_container" class="container-fluid">
            @section('navigation')
    			<div id="wapper_header">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand text-uppercase" href="{{ url('/') }}">@yield('title') </a>
                            </div>
                            <div class="collapse navbar-collapse" id="menu">
                                <ul class="nav navbar-nav">
                                    @foreach ($categories as $key => $category)
                                    <li class="divider">
                                        <a class="dropdown-toggle text-uppercase" data-toggle="dropdown" href="/{{ $category->id }}">{{ $category->name }}<span class="caret"> </span></a>
                                        <ul class="dropdown-menu">
                                        @foreach ($trademarks as $key => $trademark)
                                        @if ($category->id == $trademark->categories_id)
                                            <li>
                                                <a class="text-uppercase" href="{{ URL::to('products/'.$category->id.'/'.$trademark->trademark_id.'') }}">{{ $trademark->trademark_name  }}</a>
                                            </li>
                                        @endif
                                        @endforeach
                                        </ul>
                                    </li>
                                   @endforeach
                                </ul>
                                <ul class="nav navbar-nav navbar-right container-fluid">
                                    <li>
                                    <form class="navbar-form form-search" role="search" method="post">
                                        <div class="right-inner-addon">
                                          <span class=" glyphicon glyphicon-search"></span>
                                           <input class="search form-control" name="search" type="search" autocomplete="off" placeholder="Search...">
                                        </div>
                                    </form>
                                  </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div id="result" style="float:none !important;">
                    </div>
                </div>
            @show
            @section('feature')
            	<div class="wapper-feature container-fluid">
                    <div class="feature-slideshow container collapse navbar-collapse" >
                        <div id="sliderFrames col-lg-8">
                            <div id="slider" class="container">
                                 <a class="lazyImage" href="{{ asset('images/asus.jpg') }} " title="Pure Javascript. No jQuery. No Flash.">Pure JavaScript</a>
                                 <a class="lazyImage" href="{{ asset('images/dell.jpg') }}" title="Pure Javascript. No jQuery. No Flash.">Pure JavaScript</a>
                                 <a class="lazyImage" href="{{ asset('images/sony.jpg') }}" title="Pure Javascript. No jQuery. No Flash.">Pure JavaScript</a>
                                 <a class="lazyImage" href="{{ asset('images/ipad.jpg') }}" title="Pure Javascript. No jQuery. No Flash.">Pure JavaScript</a>
                                 <a class="lazyImage" href="{{ asset('images/samsung.jpg') }}" title="Pure Javascript. No jQuery. No Flash.">Pure JavaScript</a>
                            </div>
                            <!--thumbnails-->
                            <div id="thumbs" class=" container col-lg-4">
                                <div class="thumb container">
                                    <div class="frame"><img src="{{ asset('images/asus.jpg') }}" /></div>
                                    <div class="thumb-content"><p>ASUS TACHI</p>Thumbnails allows any HTML content</div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div class="thumb">
                                    <div class="frame"><img src="{{ asset('images/dell.jpg') }}" /></div>
                                    <div class="thumb-content"><p>DELL INPROSION</p>Thumbnail style is customizable</div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div class="thumb">
                                    <div class="frame"><img src="{{ asset('images/sony.jpg') }}" /></div>
                                    <div class="thumb-content"><p>SONY Z3 2016</p>Just a CSS tweak.</div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div class="thumb">
                                    <div class="frame"><img src="{{ asset('images/ipad.jpg') }}" /></div>
                                    <div class="thumb-content"><p>IPAD AIR 2 2015</p>Built-in functions for the thumbnails</div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div class="thumb">
                                    <div class="frame"><img src="{{ asset('images/samsung.jpg') }}" /></div>
                                    <div class="thumb-content"><p>SAMSUNG GALAXY S7</p>Built-in functions for the thumbnails</div>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @show
            @section('main')
                <div id="wapper-main">
                    @foreach ($categories as $key => $category)
                    <div id="group-product-title" class="navbar navbar-default">
                        <div class="navbar-brand text-uppercase"> {{ $category->name }}</div>
                    </div>

                    <div class="row ">
                        @foreach ($products as $key => $product)
                            @if($category->id == $product->group_id)
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
                            @endif
                        @endforeach
                    </div>
                    @endforeach
                </div>
            @show
            @section('footer')
                <div class="container-fluid panel-footer">
                    <div class="col-lg-3 col-md-6 col-sm-6   col-xs-12">
                        <h3 class="text-center">ABOUT WEBSITE</h3>
                        <small style="line-height: 1.5;" class="text-justify sm text-center">
                            <p class="text-center">Website được thiết kế bởi nhóm Cún Con Say Sữa - 08THC và hoạt động với mục đích phi thương mại .</p>
                            <p class="text-center">Mọi thông tin chi tiết về website liên hệ trực tiếp thông qua :</p>
                            <p class="text-center">Email 1 : <a href="mailto:vophitruonganh@gmail.com">vophitruonganh@gmail.com</a></p>
                            <p class="text-center">Email 1 : <a href="mailto:hoangtubeatup@gmail.com">hoangtubeatup@gmail.com</a></p>
                            <p class="text-center">Số điện thoại : 01666696151</p>
                        </small>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <h3 class="text-center">SERVICE & WARRANTY</h3>
                        <small style="line-height: 1.5;" class="text-justify sm">
                            <p class="text-center"><a href="#">Chính Sách Bảo Hành Sản Phẩm</a></p>
                            <p class="text-center"><a href="#">Địa Điểm Bảo Hành Sản Phẩm</a></p>
                            <p class="text-center"><a href="#">Hướng dẫn đặt hàng Online</a></p>
                            <p class="text-center"><a href="#">Giao Hàng & Nhận Hàng</a></p>
                            <p class="text-center"><a href="#">Hướng Dẫn Đổi Trả Hàng</a></p>
                            <p class="text-center"><a href="#">Dịch Vụ Hỗ Trợ Online</a></p>
                        </small>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <h3 class="text-center">INSTALLMENT PURCHASE</h3>
                        <small style="line-height: 1.5;" class="text-justify sm">
                            <p class="text-center"><a href="#">Điều Kiện - Hồ Sơ</a></p>
                            <p class="text-center"><a href="#">Cách Thức Đăng Ký Mua Trả Góp</a></p>
                            <p class="text-center"><a href="#">Ngân Hàng Hỗ Trợ</a></p>
                            <p class="text-center"><a href="#">Cách Thức Trả Góp</a></p>
                            <p class="text-center"><a href="#">Bào Hành Sản Phẩm</a></p>
                            <p class="text-center"><a href="#">Dịch Vụ Hỗ Trợ Online</a></p>
                        </small>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <h3 class="text-center">CONTACTS</h3>
                        <small style="line-height: 1.5;" class="text-justify sm">
                            <p class="text-center">Liên Hệ Qua Email :</p>
                            <p class="text-center">Email 1 : <a href="mailto:vophitruonganh@gmail.com">vophitruonganh@gmail.com</a></p>
                            <p class="text-center">Email 1 : <a href="mailto:hoangtubeatup@gmail.com">hoangtubeatup@gmail.com</a></p>
                            <p class="text-center">Liên Hệ Qua Số Điện Thoại :</p>
                            <p class="text-center">Số điện thoại : 01666696151</p>
                            <p class="text-center">Số điện thoại : 01666696152</p>
                        </small>
                    </div>
                </div>
            @show
        </div>
    </body>
</html>
