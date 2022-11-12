@extends('backend.layouts.master')
@section('page-title','Product Category')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                          @include('backend.partials._message')
                            <a href="{{route('product_category.create')}}" class="btn btn-success">Create a new Product Category</a> <br> <br>
                            
                           <table class="table table-bordered">
                               <thead>
                                   <th>Sl.</th>
                                   <th>Category</th>
                                   <th>Main Category</th>
                                   <th>Image</th>
                                   <th>Action</th>
                               </thead>
                               <tbody>
                                <?php $i = 0; ?>
                                @foreach($categories as $cat)
                                <?php $i++; ?>
                                <tr>
                                  <td>{{$i}}</td>
                                  <td>{{$cat->category}}</td>
                                  <td>{{$cat->category}}</td>
                                  <td>
                                    <?php echo "<img src='".asset($cat->image)."' style='height:50px;'>";?>
                                  </td>
                                  <td>
                                         <a href="{{route('product_category.edit',$cat->id)}}" class="btn btn-info">Edit</a>
                                         <form action="{{route('product_category.destroy',$cat->id)}}" method="post">
                                           @csrf
                                           @method('delete')
                                           <button class="btn btn-danger" type="submit" onClick="return deleteconfirm();">Del</button>
                                         </form>
                                        
                                       </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
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
