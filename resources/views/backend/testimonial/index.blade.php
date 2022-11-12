@extends('backend.layouts.master')
@section('page-title','Event')
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
                            <a href="{{route('testimonial.create')}}" class="btn btn-success">Create a new Testimonial</a> <br> <br>
                            
                           <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                               <thead>
                                   <th>Sl.</th>
                                   <th>Name</th>
                                   <th>Designation</th>
                                   <th>Comment</th>
                                   <th>Image</th>
                                   <th>Action</th>
                               </thead>
                               <tbody>
                                <?php
                                // print_r($news);
                                 $news1 = 0;

                                 if(isset($testimonials) && !empty($testimonials)){

                                ?>
                                @foreach($testimonials as $data)
                                <?php $news1++; ?>
                                   <tr>
                                       <td>{{$news1}}</td>
                                       <td>{{$data->name}}</td>
                                       <td>{{$data->designation}}</td>
                                       <td>{!! $data->comment !!}</td>
                                       <td>
                                         <?php echo "<img src='".asset($data->image)."' style='height:50px;'>";?>
                                       </td>
                                       <td>
                                         <a href="{{route('testimonial.edit',$data->id)}}" class="btn btn-info btn-sm">Edit</a>
                                         <form action="{{route('testimonial.destroy',$data->id)}}" method="post" style="display: inline-block;">
                                           @csrf
                                           @method('delete')
                                           <button class="btn btn-danger btn-sm" type="submit" onClick="return deleteconfirm();">Del</button>
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
<script src="{{url('backend/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('backend/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{url('backend/assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{url('backend/assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{url('backend/assets/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{url('backend/assets/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{url('backend/assets/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{url('backend/assets/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{url('backend/assets/plugins/datatables/buttons.print.min.js')}}"></script>

<!-- Key Tables -->
<script src="{{url('backend/assets/plugins/datatables/dataTables.keyTable.min.js')}}"></script>

<!-- Responsive examples -->
<script src="{{url('backend/assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{url('backend/assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

<!-- Selection table -->
<script src="{{url('backend/assets/plugins/datatables/dataTables.select.min.js')}}"></script>
<script>
 jQuery(".description").text(function (i, text) {
  return text.length > 100 ? text.substr(0, text.lastIndexOf(' ', 100)) + '...' : text;
});
</script>
<script>
  $(document).ready(function() {

      // Default Datatable
      $('#datatable').DataTable();

      //Buttons examples
      var table = $('#datatable-buttons').DataTable({
          lengthChange: false,
          buttons: ['copy', 'excel', 'pdf']
      });

      // Key Tables

      $('#key-table').DataTable({
          keys: true
      });

      // Responsive Datatable
      $('#responsive-datatable').DataTable();

      // Multi Selection Datatable
      $('#selection-datatable').DataTable({
          select: {
              style: 'multi'
          }
      });

      table.buttons().container()
              .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
  } );

</script>
@endsection
