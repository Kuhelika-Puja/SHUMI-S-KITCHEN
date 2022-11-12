@extends('backend.layouts.master')
@section('page-title','Team')
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
                            <a href="{{route('team.create')}}" class="btn btn-success">Create a new Team</a> <br> <br>
                            
                           <table class="table table-bordered">
                               <thead>
                                   <th>Sl.</th>
                                   <th>Name</th>
                                   <th>Designation</th>
                                   <th>Image</th>
                                   <th>Action</th>
                               </thead>
                               <tbody>
                                <?php
                                // print_r($news);
                                 $news1 = 0;

                                 if(isset($team) && !empty($team)){

                                ?>
                                @foreach($team as $data)
                                <?php $news1++; ?>
                                   <tr>
                                       <td>{{$news1}}</td>
                                       <td>{{$data->name}}</td>
                                       <td>
                                        <div class="description">{!! $data->designation  !!}</div></td>
                                       <td>
                                         <?php echo "<img src='".asset($data->image)."' style='height:50px;'>";?>
                                       </td>
                                       <td>
                                         <a href="{{route('team.edit',$data->id)}}" class="btn btn-info">Edit</a>
                                         <form action="{{route('team.destroy',$data->id)}}" method="post">
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
@section('backend-scripts')
<script>
 jQuery(".description").text(function (i, text) {
  return text.length > 200 ? text.substr(0, text.lastIndexOf(' ', 150)) + '...' : text;
});
</script>
@endsection
