@extends('backend.layouts.master')
@section('page-title','Event')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                  <a href="{{route('servicecharge.index')}}" class="btn btn-info">Back</a>
                    <div class="card">
                        <div class="card-body">
                          <h3 class="text-center"> <?php if(isset($service_charge)){ echo "Update ";}else{ ?>Create new <?php } ?>  Service Charge </h3>
                          @include('backend.partials._message')
                           <form action="{{route('servicecharge.store')}}" method="post" enctype="multipart/form-data">
                             @csrf
                             <input type="hidden" name="update_id" value="<?php if(isset($service_charge->id)){echo $service_charge->id;}?>">
                             <div class="form-group">
                               <label for="">Service Name</label>
                               <input type="text" class="form-control" name="name" value="<?php if(isset($service_charge->name)){echo $service_charge->name;}?>">
                             </div>
                             <div class="form-group">
                               <label for="">Service Price</label>
                               <input type="text" class="form-control" name="price" value="<?php if(isset($service_charge->name)){echo $service_charge->name;}?>">
                             </div>
                             
      

                             <br>
                             <?php
                              if(isset($service_charge)){
                              ?>
                              <input type="submit" class="btn btn-success" value="Update">
                              <?php
                              }else{
                             ?>
                             <input type="submit" class="btn btn-success" value="Submit">
                             <?php } ?>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection