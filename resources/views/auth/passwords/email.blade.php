@extends('layout2')

@section('content')
<div class="header header-filter" style="background-image: url('../assets/img/field.jpg'); 
background-size: cover; background-position: top center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-4 col-sm-offset-2">
                        <div class="card card-signup">
                        
                        <div class="header header-info text-center">
                            <h4>Reset Password</h4>
                        </div>
                        @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                            {{ csrf_field() }}
                            
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-info">
                                        Send Password Reset Link
                                    </button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
