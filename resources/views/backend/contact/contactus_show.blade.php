@extends('backend.layouts.master')
@section('page-title','Contact')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-head bg-dark">
                            <h4 class="py-2 text-center text-light">Contact Us</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="title">
                                        <h6 class="py-2">Name :</h6>
                                        <h6 class="py-2">Subject :</h6>
                                        <h6 class="py-2">Email :</h6>
                                        <h6 class="py-2">Phone :</h6>
                                        <h6 class="py-2">Message :</h6>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="body">
                                        <h6 class="py-2">{{$contact->name}}</h6>
                                        <h6 class="py-2">{{$contact->subject}}</h6>
                                        <h6 class="py-2">{{$contact->email}}</h6>
                                        <h6 class="py-2">{{$contact->tel}}</h6>
                                        <h6 class="py-2">{{$contact->message}}</h6>
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