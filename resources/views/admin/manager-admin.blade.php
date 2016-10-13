<!DOCTYPE html>
<html>
        <head>
             @section('head-admin')
                <meta charset="utf-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}" />
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
                <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"/>
                <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.theme.css')}}"/>
                {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/style-global.css')}}"> --}}
                <link rel="stylesheet" type="text/css" href="{{asset('css/style-global-admin.css')}}">
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
        <div id="wapper_container-admin">
            @section('navigation-admin')
            <div class="col-lg-12 ">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-2 site-bar">
                        <h3 class="text-center">DIGITALZONE</h3>
                        <img src="{{ asset('images/avata.jpg') }}" class="img-responsive avata" alt="">
                        <h3 class="text-center">Võ Phi Trường Anh</h3>
                        <ul>
                            <li><a href="#">FUNCTION 1</a></li>
                            <li><a href="#">FUNCTION 2</a></li>
                            <li><a href="#">FUNCTION 3</a></li>
                            <li><a href="#">FUNCTION 4</a></li>
                            <li><a href="#">FUNCTION 5</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-8 col-xs-10">b</div>
                </div>
            </div>
            @show
            @section('feature-admin')

            @show
            @section('main-admin')
            <div id="wapper-main">

            </div>
            @show
            @section('footer-admin')

            @show
        </div>
    </body>
</html>
