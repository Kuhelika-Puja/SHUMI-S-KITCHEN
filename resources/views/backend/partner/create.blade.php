@extends('backend.layouts.master')
@section('page-title','Sliders')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                          <h3 class="text-center"> <?php if(isset($partner)){ echo "Update ";}else{ ?>Create new <?php } ?>  Partner </h3>
                          @include('backend.partials._message')
                           <form action="{{route('partner.store')}}" method="post" enctype="multipart/form-data">
                             @csrf
                             <input type="hidden" name="update_id" value="<?php if(isset($partner->id)){echo $partner->id;}?>">
                             <div class="form-group">
                               <label for="">Name</label>
                               <input type="text" class="form-control" name="name" value="<?php if(isset($partner->name)){echo $partner->name;}?>">
                             </div>
                             
                             <div class="form-group">
                               <label for="">Upload Image</label>
                               <input type="file" class="form-control" name="image">
                               <?php
                                if(isset($partner->image)){
                                  echo "<img src='".asset($partner->image)."' style='height:50px;'>";
                                }
                               ?>
                             </div>
                             <br>
                             <?php
                              if(isset($partner)){
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