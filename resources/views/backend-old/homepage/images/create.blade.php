@extends('backend.layouts.master')
@section('page-title','Event')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                  <a href="{{route('homepageimage.index')}}" class="btn btn-info">Back</a>
                    <div class="card">
                        <div class="card-body">
                          <h3 class="text-center"> <?php if(isset($homeimage)){ echo "Update ";}else{ ?>Create New <?php } ?>  Homepage Image  </h3>
                          @include('backend.partials._message')
                           <form action="{{route('homepageimage.store')}}" method="post" enctype="multipart/form-data">
                             @csrf
                             <input type="hidden" name="update_id" value="<?php if(isset($homeimage->id)){echo $homeimage->id;}?>">
                             <div class="form-group">
                               <label for="name">Name</label>
                               <input type="text" class="form-control" name="name" value="<?php if(isset($homeimage->name)){echo $homeimage->name;}?>">
                             </div>
                             <div class="form-group">
                               <label for="">Upload Image</label>
                               <input type="file" class="form-control" name="image">
                               <?php
                                if(isset($homeimage->image)){
                                  echo "<img src='".asset($homeimage->image)."' style='height:50px;'>";
                                }
                               ?>
                             </div>
                             <br>
                             <?php
                              if(isset($homeimage)){
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