@extends('backend.layouts.master')
@section('page-title','Event')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                  <a href="{{route('testimonial.index')}}" class="btn btn-info">Back</a>
                    <div class="card">
                        <div class="card-body">
                          <h3 class="text-center"> <?php if(isset($testimonial)){ echo "Update ";}else{ ?>Create new <?php } ?>  Testimonial </h3>
                          @include('backend.partials._message')
                           <form action="{{route('testimonial.store')}}" method="post" enctype="multipart/form-data">
                             @csrf
                             <input type="hidden" name="update_id" value="<?php if(isset($testimonial->id)){echo $testimonial->id;}?>">
                             <div class="form-group">
                               <label for="">Name</label>
                               <input type="text" class="form-control" name="name" value="<?php if(isset($testimonial->name)){echo $testimonial->name;}?>">
                             </div>
                             <div class="form-group">
                               <label for="">Designation</label>
                               <input type="text" class="form-control" name="designation" value="<?php if(isset($testimonial->designation)){echo $testimonial->designation;}?>">
                             </div>
                             <div class="form-group">
                               <label for="">Comment</label>
                               <textarea name="comment" id="" class="form-control " cols="30" rows="10">
                                 <?php if(isset($testimonial) && !empty($testimonial)){
                                  ?>
                                  {!! $testimonial->comment !!}
                                  <?php
                                 }?>
                               </textarea>
                             </div>
                             <div class="form-group">
                               <label for="">Upload Image</label>
                               <input type="file" class="form-control" name="image">
                               <?php
                                if(isset($testimonial->image)){
                                  echo "<img src='".asset($testimonial->image)."' style='height:50px;'>";
                                }
                               ?>
                             </div>

                             <br>
                             <?php
                              if(isset($testimonial)){
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