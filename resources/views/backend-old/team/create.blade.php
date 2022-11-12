@extends('backend.layouts.master')
@section('page-title','Service')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container"> 
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                          <h3 class="text-center"> <?php if(isset($team)){ echo "Update ";}else{ ?>Create new <?php } ?>  Team </h3>
                          @include('backend.partials._message')
                           <form action="{{route('team.store')}}" method="post" enctype="multipart/form-data">
                             @csrf
                             <input type="hidden" name="update_id" value="<?php if(isset($team->id)){echo $team->id;}?>">
                             <div class="form-group">
                               <label for="">Name</label>
                               <input type="text" class="form-control" name="name" value="<?php if(isset($team->name)){echo $team->name;}?>">
                             </div>
                             <div class="form-group">
                               <label for="">Description</label>
                               <textarea name="designation" id="" cols="5" rows="5" class="form-control summernote"><?php if(isset($team->designation)){echo $team->designation;}?></textarea>
                              
                             </div>
                             <div class="form-group">
                               <label for="">Upload Image</label>
                               <input type="file" class="form-control" name="image">
                               <?php
                                if(isset($event->image)){
                                  echo "<img src='".asset($event->image)."' style='height:50px;'>";
                                }
                               ?>
                             </div>

                         

                             <br>
                             <?php
                              if(isset($team)){
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