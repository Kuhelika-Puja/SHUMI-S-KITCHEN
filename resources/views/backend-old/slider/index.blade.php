@extends('backend.layouts.master')
@section('page-title','Sliders')
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
                            <a href="{{route('slider.create')}}" class="btn btn-success">Create a new slider</a> <br> <br>
                            
                           <table class="table table-bordered">
                               <thead>
                                   <th>Sl.</th>
                                   <th>Title</th>
                                   <th>Subtitle</th>
                                   <th>Image</th>
                                   <th>Action</th>
                               </thead>
                               <tbody>
                                <?php
                                 $slider = 0;
                                 if(isset($sliders) && !empty($sliders)){
                                ?>
                                @foreach($sliders as $data)
                                <?php $slider++; ?>
                                   <tr>
                                       <td>{{$slider}}</td>
                                       <td>{{$data->title}}</td>
                                       <td>{{$data->subtitle}}</td>
                                       <td>
                                         <?php echo "<img src='".asset($data->image)."' style='height:50px;'>";?>
                                       </td>
                                       <td>
                                         <a href="{{route('slider.edit',$data->id)}}" class="btn btn-info">Edit</a>
                                         <form action="{{route('slider.destroy',$data->id)}}" method="post">
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
