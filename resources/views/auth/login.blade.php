@extends('layout2')

@section('content')

<div class="header header-filter" style="background-image: url('../assets/img/field.jpg'); 
background-size: cover; background-position: top center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="card card-signup">
                            <form class="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                                <div class="header header-danger text-center">
                                    <h4>Login</h4>
                                </div>
                                <div class="content">
                                    <div class="input-group" class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Email..." name="email" value="{{ old('email') }}" required autofocus>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                     @endif
                                    <div class="input-group" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <input type="password" placeholder="Password..." class="form-control" name="password" required/>
                                    </div>
                                     @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                     @endif
                                </div>
                               

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-danger">
                                            Login
                                        </button>
                                    </div>
                                    <div class="col-md-offset-2">
                                        <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                            Forgot Your Password?
                                        </a>    
                                    </div>
                                    <div class="col-md-offset-2">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
             @include('footer')
        </div>
@endsection
