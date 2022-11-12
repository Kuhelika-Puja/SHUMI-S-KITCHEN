@extends('backend.layouts.master')
@section('page-title','Product Category')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                         <h3 class="text-center"> <?php if(isset($category)){ echo "Update ";}else{ ?>Create new <?php } ?>  Product Category </h3>
                          @include('backend.partials._message')
                            <form action="{{route('product_category.store')}}" method="post"  enctype="multipart/form-data">
                              @csrf

                              <input type="hidden" name="update_id" value="<?php if(isset($category->id) && !empty($category->id)){echo $category->id;}?>">
                              <div class="form-group">
                                <label for="">Category</label>
                                <input type="text" class="form-control" name="category" value="<?php if(isset($category->category) && !empty($category->category)){echo $category->category;}?>" required>
                              </div>
                              
                              <div class="form-group">
                                <label for="">Upload Image</label>
                                <input type="file" class="form-control" name="image">
                                <?php if(isset($category->image) && !empty($category->image)){
                                  echo "<img src='".asset($category->image)."' style='height:50px;'>";
                                }
                                  ?>
                              </div>
                              <br>
                              <input type="submit" class="btn btn-success">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  function deleteconfirm()
  {
    deletedata = confirm("Are you sure to delete permanently?");
    if (deletedata != true)
    {
      return false;
    }
  }
</script>
@endsection
