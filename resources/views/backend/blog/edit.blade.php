@extends('backend.layouts.master')
@section('page-title','Blog')
@section('backend-stylesheet')
<style>
  .hide{
    display: none;
  }
</style>
@endsection
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                          <h3 class="text-center"> <?php if(isset($blog)){ echo "Update ";}else{ ?>Create new <?php } ?>  blog </h3>
                          @include('backend.partials._message')
                           <form action="{{route('blog.update',$blog->id)}}" method="post" enctype="multipart/form-data">
                             @csrf
                             @method('PUT')
                             <input type="hidden" name="update_id" value="<?php if(isset($blog->id)){echo $blog->id;}?>">
                             <div class="form-group">
                               <label for="">Title</label>
                               <input type="text" class="form-control" name="title" value="<?php if(isset($blog->title)){echo $blog->title;}?>">
                             </div>

                             

                             <div class="form-group">
                               <label for="">Description</label>
                               <textarea name="description" id="" class="form-control summernote" cols="30" rows="10">
                                 <?php if(isset($blog) && !empty($blog)){
                                  ?>
                                  {!! $blog->description !!}
                                  <?php
                                 }?>
                               </textarea>
                             </div>
                             <div class="form-group">
                               <label for="">Upload Image</label>
                               <input type="file" class="form-control" name="image">
                               <?php
                                if(isset($blog->image)){
                                  echo "<img src='".asset($blog->image)."' style='height:50px;'>";
                                }
                               ?>
                             </div>

                             <div class="form-group">
                               <label for="">Position</label>
                               <input type="text" class="form-control" name="position" value="<?php if(isset($blog->position)){echo $blog->position;}?>">
                             </div>

                            

                              <div class="form-group">
                                <label for="">Other Image</label>
                                
                              </div>
                              


                              
                              <div class="input-group control-group increment" >
                                <input type="file" name="photos[]" class="form-control" required>
                                <div class="input-group-btn">
                                  <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                </div>
                              </div>


                              <div class="clone hide">
                                <div class="control-group input-group" style="margin-top:10px">
                                  <input type="file" name="photos[]" class="form-control">
                                  <div class="input-group-btn">
                                    <button class="btn btn-danger remove-more" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row mt-3">
                              <?php
                                if(isset($blogimage) && !empty($blogimage)){
                                  foreach($blogimage as $photo){
                                  ?>
                                  <div class="col-md-3">
                                  <div class="photos">
                                    <img src="{{url($photo->photos)}}" alt="" style="width: 100%;">
                                    <a href="#" class="btn btn-danger">Del</a>
                                  </div>
                                  </div>
                                  <?php
                                  }
                                }

                              ?>
                              </div>

                             <br>
                             <?php
                              if(isset($blog)){
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

@section('backend-scripts')
<script>
$(document).ready(function() {
$(".add-more").click(function(){
var html = $(".clone").html();
$(".increment").after(html);
});
$("body").on("click",".remove-more",function(){
$(this).parents(".control-group").remove();
});
});

$(document).ready(function(){
  $('#other_image_del').click(function(){
    var get_image = ('#other_image_get').val();
    console.log(get_image);
  });
});

</script>
@endsection