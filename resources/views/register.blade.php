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
                        <h3 class="panel-title">Signup to be a Member.</h3>
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
                        <form role="form" method="POST" action="{{url('/register')}}">
                        {{ csrf_field() }}
                            <fieldset>
                              <div class="form-group {{ $errors->has('fname') ? ' has-error' : '' }}">
                 <input class="form-control" placeholder="First Name" name="fname" type="text" value="{{old('fname')}}" autofocus>
                                      @if ($errors->has('fname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('fname') }}</strong>
                    </span>
                @endif
                                </div>
                                <div class="form-group {{ $errors->has('lname') ? ' has-error' : '' }}">
                  <input class="form-control" placeholder="Last Name" name="lname" type="text" value="{{old('lname')}}" autofocus>
                                      @if ($errors->has('lname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('lname') }}</strong>
                    </span>
                @endif
                                </div>
                                <div class="form-group {{ $errors->has('nid') ? ' has-error' : '' }}">
                 <input class="form-control" placeholder="National ID" name="nid" type="number" value="{{old('nid')}}" autofocus>
                                      @if ($errors->has('nid'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nid') }}</strong>
                    </span>
                @endif
                                </div>
                 <div class="form-group {{ $errors->has('dob') ? ' has-error' : '' }}">
                 <small>Date of Birth</small>
                 <input class="form-control" placeholder="Date of Birth" name="dob" type="date" autofocus>
                                      @if ($errors->has('dob'))
                    <span class="help-block">
                        <strong>{{ $errors->first('dob') }}</strong>
                    </span>
                @endif
                                </div>
                                   <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                 <input class="form-control" placeholder="Phone No." name="phone" type="text" value="{{old('phone')}}" autofocus>
                                      @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
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
                 <div class="form-group {{ $errors->has('residence') ? ' has-error' : '' }}">
                 <input class="form-control" placeholder="Where do you stay?" name="residence" type="text" value="{{old('residence')}}" autofocus>
                                      @if ($errors->has('residence'))
                    <span class="help-block">
                        <strong>{{ $errors->first('residence') }}</strong>
                    </span>
                @endif
                                </div>
                <div class="form-group {{ $errors->has('nok') ? ' has-error' : '' }}">
                 <input class="form-control" placeholder="Next of Kin" name="nok" type="text" value="{{old('nok')}}" autofocus>
                                      @if ($errors->has('nok'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nok') }}</strong>
                    </span>
                @endif
                                </div>
                <div class="form-group {{ $errors->has('relationship') ? ' has-error' : '' }}">
                <small>How are related to the stated next of kin?</small>
                 <select class="form-control" value="{{old('relationship')}}" name="relationship">
                 <option value=""> --Select Relationship--</option>
                 <option value="Wife">Wife</option>
                 <option value="Husband">Husband</option>
                 <option value="Son">Son</option>
                 <option value="Daughter">Daughter</option>
                 <option value="Father">Father</option>
                 <option value="Mothet">Mother</option>
                 </select>
                                      @if ($errors->has('relationship'))
                    <span class="help-block">
                        <strong>{{ $errors->first('relationship') }}</strong>
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