<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      {{--   <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style> --}}
    </head>
    <body>
        <div class="container">
            <div class="content">
                {!! Form::open(['url' => 'login']) !!}
                <div class="form-group">
                    <h1 class="text-center">LOGIN FORM</h1>
                </div>
                <div class="form-group">
                    {!! Form::label('name', 'Username',null) !!}
                    {!! Form::input('text','username', null,['class' => 'form-control' , 'id' =>"username", 'placeholder' => 'Input username ...']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'password',null, ['class' => 'form-label']) !!}
                    {!! Form::input('password','password', null,['class' => 'form-control' , 'id' =>"password", 'name' => 'password', 'placeholder' => 'Input password ...']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('login' , ['class'=>'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </body>
</html>
