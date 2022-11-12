@extends('frontend.layouts.master')
@section('page-content')
<style>
.invalid-feedback{
display: block;
}
</style>
<section class="login-section pt-5 pb-5" style="background: #eee;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="login" style="background: #fff;padding: 30px;">
                    <h3 class="text-center">Create a new account</h3>
                    <br>
                    <hr>
                    
                    <form action="{{url('register')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_type" value="{{Session::get('user_type')}}">
                        <div class="form-group">
                            <label for="f_name" class="">First Name  <span class="text-danger">*</span> </label>
                            <input type="text" class="form-control custom-form-control {{ $errors->has('f_name') ? ' is-invalid' : '' }}" id="f_name" name="f_name" value="{{ old('f_name') }}" required autocomplete="f_name" autofocus>
                            @if($errors->has('f_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('f_name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="l_name" class="">Last Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control custom-form-control {{ $errors->has('l_name') ? ' is-invalid' : '' }}" id="l_name" name="l_name" value="{{ old('l_name') }}" required autocomplete="l_name" autofocus>
                            @if ($errors->has('l_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('l_name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email" class="">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control custom-form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    
                        
                        
                       
                        
                        
                        
                        
                        <div class="form-group">
                            <label for="password" class="">Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control custom-form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" autofocus>
                            @if($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password" class="">Confirm Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control custom-form-control" id="password" name="password_confirmation">

                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-outline-secondary form-control custom-btn-connect-sm  mb-2 mb-2 ">Submit </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@section('frontend-scripts')
<script>
  $(document).ready(function() {
    const genderOldValue = '{{ old('gender') }}';
    
    if(genderOldValue !== '') {
      $('#gender').val(genderOldValue);
    }
  });
</script>

    <script type="text/javascript">
        randomNum = Math.floor(100000 + Math.random() * 900000)
        window.onload = function () {
            document.getElementById("txt_usrid").value = randomNum;
        }
    </script>
@endsection
@endsection