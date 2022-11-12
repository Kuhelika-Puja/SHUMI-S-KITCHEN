@extends('backend.layouts.master')
@section('page-title','Setting')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            
                            
                            <h1 class="text-center">Setting</h1>
                            @include('backend.partials._message')
                            <form action="{{route('setting.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="update_id" value="{{$setting->id}}">
                                <div class="form-group">
                                    <label for="logo">Logo</label>
                                    <input type="file" name="logo" class="form-control">
                                    <?php echo "<img src='".asset($setting->logo)."' style='height:30px;'/>";?>
                                </div>
                                <div class="form-group">
                                    <label for="company_name">Company Name</label>
                                    <input type="text" name="company_name" class="form-control" value="{{$setting->company_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="company_sologan">Company Sologan</label>
                                    <input type="text" name="company_sologan" class="form-control" value="{{$setting->company_sologan}}">
                                </div>
                                <div class="form-group">
                                    <label for="company_description">Company Description</label>
                                    
                                    <textarea name="company_description" id="company_description" cols="5" rows="5" class="form-control">{!! $setting->company_description !!}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="company_author">Company Author</label>
                                    <input type="text" name="company_author" class="form-control" value="{{$setting->company_author}}">
                                </div>

                                <div class="form-group">
                                    <label for="phone_one">Phone One</label>
                                    <input type="text" name="phone_one" class="form-control"  value="{{$setting->phone_one}}">
                                </div>

                                <div class="form-group">
                                    <label for="phone_two">Phone Two</label>
                                    <input type="text" name="phone_two" class="form-control"  value="{{$setting->phone_two}}" >
                                </div>

                                <div class="form-group">
                                    <label for="email_one">Email One</label>
                                    <input type="text" name="email_one" class="form-control"  value="{{$setting->email_one}}">
                                </div>

                                <div class="form-group">
                                    <label for="email_two">Email Two</label>
                                    <input type="text" name="email_two" class="form-control"  value="{{$setting->email_two}}">
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="form-control"  value="{{$setting->address}}">
                                </div>

                                <div class="form-group">
                                    <label for="location_embaded">Location Embaded</label>
                                    <textarea name="location_embaded" id="location_embaded" cols="5" rows="5" class="form-control">{!! $setting->location_embaded !!}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="fb">Facebook Link</label>
                                    <input type="text" name="fb" class="form-control" value="{{$setting->fb}}">
                                </div>

                                <div class="form-group">
                                    <label for="twitter">Twitter Link</label>
                                    <input type="text" name="twitter" class="form-control" value="{{$setting->twitter}}">
                                </div>

                                <div class="form-group">
                                    <label for="ins">Instragram Link</label>
                                    <input type="text" name="ins" class="form-control" value="{{$setting->ins}}">
                                </div>

                                <div class="form-group">
                                    <label for="linkedin">Linkedin Link</label>
                                    <input type="text" name="linkedin" class="form-control" value="{{$setting->linkedin}}">
                                </div>

                                <div class="form-group">
                                    <label for="skype">Skype Link</label>
                                    <input type="text" name="skype" class="form-control" value="{{$setting->skype}}">
                                </div>

                                <div class="form-group">
                                    <label for="youtube">Youtube Link</label>
                                    <input type="text" name="youtube" class="form-control" value="{{$setting->youtube}}">
                                </div>
                                <br>
                                <input type="submit" class="btn btn-success" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection