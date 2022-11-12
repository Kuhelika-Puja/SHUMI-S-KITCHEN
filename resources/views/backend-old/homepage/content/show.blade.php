@extends('backend.layouts.master')
@section('page-title','Contact')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <a href="{{ route('homepage.index') }}" class="btn btn-info btn-sm">Back</a>
                    <div class="card">
                        <div class="card-head bg-dark">
                            <h4 class="py-2 text-center text-light">Homepage Content </h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="title">
                                        <h6 class="py-2">Heading :</h6>
                                        <h6 class="py-2">Content :</h6>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="body">
                                        <h6 class="py-2">{{$data->heading}}</h6>
                                        <h6 class="py-2">{{$data->content}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('backend-scripts')
 		
@endsection