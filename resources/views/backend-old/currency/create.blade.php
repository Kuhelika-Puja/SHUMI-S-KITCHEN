@extends('backend.layouts.master')
@section('page-title','Event')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                  <a href="{{route('currency.index')}}" class="btn btn-info">Back</a>
                    <div class="card">
                        <div class="card-body">
                          <h3 class="text-center"> <?php if(isset($currency)){ echo "Update ";}else{ ?>Create new <?php } ?>  Currency </h3>
                          @include('backend.partials._message')
                           <form action="{{route('currency.store')}}" method="post" enctype="multipart/form-data">
                             @csrf
                             <input type="hidden" name="update_id" value="<?php if(isset($currency->id)){echo $currency->id;}?>">
                             <div class="form-group">
                               <label for="">Name</label>
                               <input type="text" class="form-control" name="name" value="<?php if(isset($currency->name)){echo $currency->name;}?>">
                             </div>
                             
      

                             <br>
                             <?php
                              if(isset($currency)){
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