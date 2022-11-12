@extends('backend.layouts.master')
@section('page-title','Partner')
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
                            <a href="{{route('partner.create')}}" class="btn btn-success">Create a new Partner</a> <br> <br>
                            
                           <table class="table table-bordered">
                               <thead>
                                   <th>Sl.</th>
                                   <th>Name</th>
                                   <th>Image</th>
                                   <th>Action</th>
                               </thead>
                               <tbody>
                                <?php
                                 $partner = 0;
                                 if(isset($partners) && !empty($partners)){
                                ?>
                                @foreach($partners as $data)
                                <?php $partner++; ?>
                                   <tr>
                                       <td>{{$partner}}</td>
                                       <td>{{$data->name}}</td>
                                       <td>
                                         <?php echo "<img src='".asset($data->image)."' style='height:50px;'>";?>
                                       </td>
                                       <td>
                                         <a href="{{route('partner.edit',$data->id)}}" class="btn btn-info">Edit</a>
                                         <form action="{{route('partner.destroy',$data->id)}}" method="post">
                                           @csrf
                                           @method('delete')
                                           <button class="btn btn-danger" type="submit" onClick="return deleteconfirm();">Del</button>
                                         </form>
                                        
                                       </td>
                                   </tr>
                                @endforeach
                                <?php } ?>
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
