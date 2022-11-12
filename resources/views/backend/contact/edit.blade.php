@extends('backend.layouts.master')
@section('page-title','Contact')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <div class="card p-3" style="background: white">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form action="{{ route('contactus.update', $data->id) }}" method="post">
                            @csrf
                            @method('put') 
                              <div class="contact-form mt-4">
                                  <h1 class="text-center py-3">Edit Contactus</h1>
                                  <div class="form-group">
                                      <label for="">Name *</label>
                                      <input type="text" class="form-control custom-form-control" name="name" value="{{ $data->name }}" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="">Email Address *</label>
                                      <input type="email" class="form-control custom-form-control" name="email" value="{{ $data->email }}" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="">Phone *</label>
                                      <input type="number" class="form-control custom-form-control" name="phone" value="{{ $data->tel }}" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="">Subject *</label>
                                      <input type="text" class="form-control custom-form-control" name="subject" value="{{ $data->subject }}" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="">Message *</label>
                                      <textarea name="message" class="form-control custom-form-control" id="" cols="10" rows="5">{{ $data->message }}</textarea>
                                  </div>
                                  <div class="form-group text-center">
                                      <button type="submit" class="btn btn-outline-secondary custom-btn-connect-sm  mb-2">SUBMIT</button>
                                  </div>
                              </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('backend-scripts')
 		
@endsection















