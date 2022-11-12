@extends('backend.layouts.master')
@section('page-title','Event')
@section('style')
<style>
  .text-muted{
    color: gainsboro;
    font-size: 10px;
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
                              <label for="link">Links</label>
                              <input type="text" class="form-control" name="link" value="<?php if(isset($homeimage->link)){echo $homeimage->link;}?>">
                            </div>

                            <div class="form-group">
                              <label for="">Select Image Position</label>
                              <select class="form-control" aria-label="Default select example" name="position">
                                <option selected disabled>Select Image Position</option>
                                <option @isset ($homeimage) {{ $homeimage->position == 1 ? 'selected' : ''}} @endisset value="1">1 (Required Image Size 375*255px)</option>
                                <option @isset ($homeimage) {{ $homeimage->position == 2 ? 'selected' : ''}} @endisset value="2">2 (Required Image Size 375*500px)</option>
                                <option @isset ($homeimage) {{ $homeimage->position == 3 ? 'selected' : ''}} @endisset value="3">3 (Required Image Size 375*375px)</option>
                                <option @isset ($homeimage) {{ $homeimage->position == 4 ? 'selected' : ''}} @endisset value="4">4 (Required Image Size 375*500px)</option>
                                <option @isset ($homeimage) {{ $homeimage->position == 5 ? 'selected' : ''}} @endisset value="5">5 (Required Image Size 375*250px)</option>
                                <option @isset ($homeimage) {{ $homeimage->position == 6 ? 'selected' : ''}} @endisset value="6">6 (Required Image Size 375*375px)</option>
                              </select>
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

@section('scripts')
  
@endsection