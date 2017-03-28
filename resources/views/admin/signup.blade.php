<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ONLINE CO-OPERATIVE SOCIETY SYSTEM</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Administrator SignUp.</h3>
                    </div>
                    <div class="panel-body">
  @if(Session::has('error'))
<div class="alert alert-danger text-center">
<strong>{{Session::get('danger')}}</strong>
</div>
@endif
@if(Session::has('success'))
<div class="alert alert-success text-center">
<strong>{{Session::get('success')}}</strong>
</div>
@endif
                        <form role="form" method="POST" action="{{url('/admin')}}">
                        {{ csrf_field() }}
                            <fieldset>
                              <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                 <input class="form-control" placeholder="Full Name" name="name" type="text" value="{{old('name')}}" autofocus>
                                      @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                                </div>
                       
                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
             <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus value="{{old('email')}}">
                                      @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                                </div>
         
                                <div class="form-group  {{ $errors->has('password') ? ' has-error' : '' }}">
            <input class="form-control" placeholder="Password" name="password" type="password" > 
                                                       @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                                </div>
                                 <div class="form-group  {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input class="form-control" placeholder="Password confirmation" name="password_confirmation" type="password"> 
                                                       @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                                </div>
                                <button type="submit"  class="btn btn-lg btn-success btn-block">Create Account</button>
                            </fieldset>
                        </form>
                        <hr>
                        <a href="{{route('index')}}"  class="btn btn-sm btn-info pull-right">Back Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('dist/js/sb-admin-2.js')}}"></script>

</body>

</html>
]