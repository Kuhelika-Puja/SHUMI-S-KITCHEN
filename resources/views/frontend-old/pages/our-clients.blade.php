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
}
</style>
@endsection
@section('page-content')
<section>
    <div class="container">
        <div class="clients-head py-sm-3 py-md-4 py-lg-5">
            <h1 class="text-center" style="color: #7F7F7F">Our Clients</h1>
        </div>
        <div class="row our-clients justify-content-center">
            <div class="col-xl-10">
                <div class="row">
                    <div class="col-3 col-sm-2">
                        <a href="https://womenindigital.net/" target="blank">
                            <img src="{{ url('frontend/our-clients/women-in-digital.png') }}" class="card-img-top lazy" alt="...">
                        </a>
                    </div>
                    <div class="col-3 col-sm-2">
                        <a href="#">
                            <img src="{{ url('frontend/our-clients/ag-plastic.png') }}" class="card-img-top lazy" alt="...">
                        </a>
                    </div>
                    <div class="col-3 col-sm-2">
                        <a href="#">
                            <img src="{{ url('frontend/our-clients/arranya.png') }}" class="card-img-top lazy" alt="...">
                        </a>
                    </div>
                    <div class="col-3 col-sm-2">
                        <a href="#">
                            <img src="{{ url('frontend/our-clients/bangladesh-govt-logo.png') }}" class="card-img-top lazy" alt="...">
                        </a>
                    </div>
                    <div class="col-3 col-sm-2">
                        <a href="#">
                            <img src="{{ url('frontend/our-clients/bishwo-rang.png') }}" class="card-img-top lazy" alt="...">
                        </a>
                    </div>
                    <div class="col-3 col-sm-2">
                        <a href="#">
                            <img src="{{ url('frontend/our-clients/brac.png') }}" class="card-img-top lazy" alt="...">
                        </a>
                    </div>
                    <div class="col-3 col-sm-2">
                        <a href="#">
                            <img src="{{ url('frontend/our-clients/gdc-bd-cooperation.jpg') }}" class="card-img-top lazy" alt="...">
                        </a>
                    </div>
                    <div class="col-3 col-sm-2">
                        <a href="#">
                            <img src="{{ url('frontend/our-clients/ipdc.png') }}" class="card-img-top lazy" alt="...">
                        </a>
                    </div>
                    <div class="col-3 col-sm-2">
                        <a href="#">
                            <img src="{{ url('frontend/our-clients/jahangirnagar-university.png') }}" class="card-img-top lazy" alt="...">
                        </a>
                    </div>
                    <div class="col-3 col-sm-2">
                        <a href="#">
                            <img src="{{ url('frontend/our-clients/just-fabric.png.jpg') }}" class="card-img-top lazy" alt="...">
                        </a>
                    </div>
                    <div class="col-3 col-sm-2">
                        <a href="#">
                            <img src="{{ url('frontend/our-clients/lakeshore-logo.png') }}" class="card-img-top lazy" alt="...">
                        </a>
                    </div>
                    <div class="col-3 col-sm-2">
                        <a href="#">
                            <img src="{{ url('frontend/our-clients/lilua.png') }}" class="card-img-top lazy" alt="...">
                        </a>
                    </div>
                    <div class="col-3 col-sm-2">
                        <a href="#">
                            <img src="{{ url('frontend/our-clients/pwd.png') }}" class="card-img-top lazy" alt="...">
                        </a>
                    </div>
                    <div class="col-3 col-sm-2">
                        <a href="#">
                            <img src="{{ url('frontend/our-clients/saicbd.png') }}" class="card-img-top lazy" alt="...">
                        </a>
                    </div>
                    <div class="col-3 col-sm-2">
                        <a href="#">
                            <img src="{{ url('frontend/our-clients/spider.png') }}" class="card-img-top lazy" alt="...">
                        </a>
                    </div>
                    <div class="col-3 col-sm-2">
                        <a href="#">
                            <img src="{{ url('frontend/our-clients/western-agro-products.png') }}" class="card-img-top lazy" alt="...">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection