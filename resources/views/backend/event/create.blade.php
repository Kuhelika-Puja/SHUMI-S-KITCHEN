@extends('backend.layouts.master')
@section('page-title','Event')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                          <h3 class="text-center"> <?php if(isset($event)){ echo "Update ";}else{ ?>Create new <?php } ?>  Event </h3>
                          @include('backend.partials._message')
                           <form action="{{route('event.store')}}" method="post" enctype="multipart/form-data">
                             @csrf
                             <input type="hidden" name="update_id" value="<?php if(isset($event->id)){echo $event->id;}?>">
                             <div class="form-group">
                               <label for="">Title</label>
                               <input type="text" class="form-control" name="title" value="<?php if(isset($event->title)){echo $event->title;}?>">
                             </div>
                             <div class="form-group">
                               <label for="">Description</label>
                               <textarea name="description" id="" class="form-control summernote" cols="30" rows="10">
                                 <?php if(isset($event) && !empty($event)){
                                  ?>
                                  {!! $event->description !!}
                                  <?php
                                 }?>
                               </textarea>
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

                             <div class="form-group">
                               <label for="">Date</label>
                               <input type="date" class="form-control" name="date" value="<?php if(isset($event->date)){echo $event->date;}?>">
                             </div>

<div class="form-group">
                               <label for="">Google From Link</label>
                               <input type="text" class="form-control" name="from_link" value="<?php if(isset($event->from_link)){echo $event->from_link;}?>">
                             </div>


                             <br>
                             <?php
                              if(isset($service)){
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