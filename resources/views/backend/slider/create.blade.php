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
                          <h3 class="text-center"> <?php if(isset($slider)){ echo "Update ";}else{ ?>Create new <?php } ?>  slider </h3>
                          @include('backend.partials._message')
                           <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                             @csrf
                             <input type="hidden" name="update_id" value="<?php if(isset($slider->id)){echo $slider->id;}?>">
                             <div class="form-group">
                               <label for="">Title</label>
                               <input type="text" class="form-control" name="title" value="<?php if(isset($slider->title)){echo $slider->title;}?>">
                             </div>
                             <div class="form-group">
                               <label for="">Sub Title</label>
                               <input type="text" class="form-control" name="subtitle" value="<?php if(isset($slider->title)){echo $slider->subtitle;}?>">
                             </div>
                             <div class="form-group">
                               <label for="">Upload Image</label>
                               <input type="file" class="form-control" name="image">
                               <?php
                                if(isset($slider->image)){
                                  echo "<img src='".asset($slider->image)."' style='height:50px;'>";
                                }
                               ?>
                             </div>
                             <br>
                             <?php
                              if(isset($slider)){
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