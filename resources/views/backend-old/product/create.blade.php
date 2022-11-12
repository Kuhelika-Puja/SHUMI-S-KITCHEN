@extends('backend.layouts.master')
@section('page-title','Product')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <br><br>
            <a href="{{route('product.index')}}" class="btn btn-info btn-sm">Back</a>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                          <h3 class="text-center"> <?php if(isset($product)){ echo "Update ";}else{ ?>Create new <?php } ?>  Product </h3>
                          @include('backend.partials._message')
                           <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                             @csrf
                             <input type="hidden" name="update_id" value="<?php if(isset($product->id)){echo $product->id;}?>">

                             <div class="form-group">
                               <label for="">Product Category</label>
                               <select name="category_id" id="" class="form-control">
                                 
                                 <?php
                                  if(isset($product->category_id) && !empty($product->category_id)){
                                    $update_category = DB::table('product_categories')->where('id',$product->category_id)->first();
                                    if(isset($update_category) && !empty($update_category)){
                                  ?>
                                  <option value="{{$update_category->id}}">{{$update_category->category}}</option>
                                <?php } }else{ ?>
                                  <option value="">Select Category</option>
                                <?php } ?>
                                 @foreach($product_category as $pcat)
                                 <option value="{{$pcat->id}}">{{$pcat->category}}</option>
                                 @endforeach
                               </select>
                             </div>

                             <div class="form-group">
                               <label for="">Select Currency</label>
                               <select name="currency" id="" class="form-control">
                                 
                                 <?php
                                  if(isset($product->currency) && !empty($product->currency)){
                                    $update_currencies = DB::table('currencies')->where('id',$product->currency)->first();
                                    if(isset($update_currencies) && !empty($update_currencies)){
                                  ?>
                                  <option value="{{$update_currencies->id}}">{{$update_currencies->name}}</option>
                                <?php } }else{ ?>
                                  <option value="">Select Category</option>
                                <?php } ?>
                                 @foreach($currency as $cu)
                                 <option value="{{$cu->name}}">{{$cu->name}}</option>
                                 @endforeach
                               </select>
                             </div>


                             <div class="form-group">
                               <label for="">Product name</label>
                               <input type="text" class="form-control" name="name" value="<?php if(isset($product->name)){echo $product->name;}?>">
                             </div>
                             <div class="form-group">
                               <label for="">Product Price</label>
                               <input type="text" class="form-control" name="price" value="<?php if(isset($product->price)){echo $product->price;}?>">
                             </div>
                             <div class="form-group">
                               <label for="">Description</label>
                               <textarea name="description" id="" class="form-control summernote" cols="30" rows="10">
                                 <?php if(isset($product) && !empty($product)){
                                  ?>
                                  {!! $product->description !!}
                                  <?php
                                 }?>
                               </textarea>
                             </div>
                             <div class="form-group">
                               <label for="">Upload Image</label>
                               <input type="file" class="form-control" name="image">
                               <?php
                                if(isset($product->image)){
                                  echo "<img src='".asset($product->image)."' style='height:50px;'>";
                                }
                               ?>
                             </div>

                             

                             <br>
                             <?php
                              if(isset($product)){
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