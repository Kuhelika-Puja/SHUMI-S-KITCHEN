@extends('frontend.layouts.master')
@section('page-content')

    <section class="login-section pt-5 pb-5" style="background: #eee;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="login" style="background: #fff;padding: 30px;">
                        <h3 class="text-center">Login</h3>
                        <form action="{{route('login')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="">Email</label>
                                <input type="email" class="form-control custom-form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" id="email" name="email">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password" class="">Password</label>
                                <input type="password" class="form-control custom-form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="password" name="password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-danger float-left">Forget Password ? </a>
                                @endif
                                <a href="{{url('register')}}" class="text-success float-right">Create Account</a>
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" class="btn btn-outline-secondary form-control custom-btn-connect-sm  mb-2 mb-2 " value="Login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


@endsection