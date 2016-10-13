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
            @section('navigation-admin')

            @show
            @section('feature-admin')

            @show
            @section('main-admin')
            <div id="wapper-main">
                <div class="row">
                    <div style="background: #fafafa; float:none; margin: 20px auto; padding: 20px; border-radius: 15px; box-shadow: 0px 0px 2px 1px #aaa;" class="col-lg-6 col-md-6 col-sm-9 col-xs-10" style="margin:auto; padding: 20px; float:none;">
                        <h1 class="">LOGIN MANAGEMENT  </h1>
                        {!! Form::open(array('id'=> 'loginForm','url' => 'dashboard/login' ,'method' => 'post')); !!}
                        <div class="form-group">
                        {!! Form::label('lblUsername','Username') !!}
                        {!! Form::text('text',null,array('id'=>'username','class'=>'form-control','name'=>'username','placeholder' => 'Username')); !!}
                        </div>
                        <div class="form-group">
                        {!! Form::label('lblPassword','Password'); !!}
                        {!! Form::password('password',array('id'=>'password','class'=>'form-control','name'=>'password','placeholder' => 'Password')); !!}
                        </div>
                        <div class="form-group">
                            <div class="btn-group">
                            {!! Form::submit('LOGIN',array('class' => 'btn btn-success', 'id' => 'btnLoginAdmin')) !!}
                            {!! Form::reset('RESET',array('class' => 'btn btn-danger', 'id' => 'btnRegister')) !!}
                            </div>
                        </div>
                        {!! Form::close(); !!}
                        {{-- <form id="loginForm" action="" method="post">
                        <div class="form-group">
                            <label for="email">USERNAME</label>
                            <input type="username" class="form-control" name="username" id="username" placeholder="Inut username ....">
                        </div>
                        <div class="form-group">
                            <label for="pwd">PASSWORD</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Input password ....">
                        </div>
                        <div id="result_login"></div>
                            <div class="btn-group">
                            <a type="submit" class="btn btn-success" href="" id="btnLoginAdmin">LOGIN</button>
                            <button type="reset" class="btn btn-danger" id="btnRegister">RESET LOGIN</button>
                        </div>
                        </form> --}}
                    </div>
                </div>
            </div>
            @show
            @section('footer-admin')

            @show
        </div>
    </body>
</html>
