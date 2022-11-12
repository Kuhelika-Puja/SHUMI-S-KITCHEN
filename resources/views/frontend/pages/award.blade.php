@extends('frontend.layouts.master')
@section('page-title',' | Our Clients')
@section('style')
<style>
.about-us-content{
line-height: 30px;
}
.our-clients  img{
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
    margin-bottom: 30px;
    height: auto;
}
</style>
@endsection
@section('page-content')
<section>
    <div class="container">
        <div class="clients-head py-sm-3 py-md-4 py-lg-5">
            <h1 class="text-center" style="color: #7F7F7F">Awards & Achievements</h1>
        </div>
        <div class="row our-clients justify-content-center">
            <div class="col-xl-10">
                <div class="row">
                    <div class="col-6 col-sm-6">
                        <a href="https://womenindigital.net/" target="blank">
                            <img src="{{ url('frontend/award/award04.jpg') }}" class="card-img-top lazy" alt="...">
                        </a>
                    </div>
                    <div class="col-6 col-sm-6">
                        <a href="#">
                            <img src="{{ url('frontend/award/award02.jpg') }}" class="card-img-top lazy" alt="...">
                        </a>
                    </div>
                    <div class="col-6 col-sm-6">
                        <a href="#">
                            <img src="{{ url('frontend/award/award03.jpg') }}" class="card-img-top lazy" alt="...">
                        </a>
                    </div>
                    <div class="col-6 col-sm-6">
                        <a href="#">
                            <img src="{{ url('frontend/award/award01.jpg') }}" class="card-img-top lazy" alt="...">
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection