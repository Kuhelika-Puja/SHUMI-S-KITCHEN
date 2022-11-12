@extends('backend.layouts.master')
@section('page-title','Gallery Lists')
@section('page-content')
 <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Gallery List</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashoard</a></li>
                                        <li class="breadcrumb-item active">Gallery</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <div class="table-rep-plugin">
                                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                                           <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            	<a href="{{route('gallery.create')}}" class="btn btn-outline-info">Create Gallery</a><br><br>
                                                <thead class="thead-default">
                                                <tr>
                                                
                                                    <th data-priority="0">Sl.</th>
                                                    <th data-priority="1">Title</th>
                                                    <th data-priority="1">Category</th>
                                                    <th data-priority="1">Description</th>
                                                    <th data-priority="1">Position</th>
                                                    <th data-priority="1">Image</th>
                                                    <th data-priority="3">Status</th>
                                                    <th data-priority="1">Date</th>
                                                    <th data-priority="3">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                	<?php $i=0;?>
                                                	@foreach($gallery as $g)
                                                	<?php $i++; ?>
                                                <tr>
                                                    
                                                    <td>{{$i}}</td>
                                                    <td>{{$g->title}}</td>
                                                    <?php
                                                           if(isset($g->category_id) && !empty($g->category_id)){
                                                            $categorys = DB::table('gallery_categories')->where('id',$g->category_id)->first();
                                                            if(isset($categorys ) && !empty($categorys)){
                                                    ?>
                                                    <td>{{$categorys->category}}</td>
<?php } } ?>
                                                    <td>{{$g->description}}</td>
                                                    <td>{{$g->position}}</td>
                                                    <td>
                                                        <?php echo "<img src='".asset($g->image)."' alt='' style='height: 80px;width: 80px;'>";?>
                                                    </td>
                                                    <td>
                                                    	<span class="label <?php if($g->status==1){?>label-success <?php } else {?> label-danger <?php } ?>"> <?php if($g->status==1){?>Active <?php }else {?>Inactive<?php } ?></span>
                                                    </td>
                                                    <td>{{$g->created_at}}</td>
                                                    <td class=""> 
                                                    	<a href="{{route('gallery.edit',$g->id)}}" class="btn btn-outline-info"><i class="zmdi zmdi-edit"></i></a>

                                                    	<form action="{{route('gallery.destroy',$g->id)}}" method="POST" style="display: inline-block;">
            @method('DELETE')
            {{csrf_field()}}
           
                   

                 <button type="" class="btn btn-outline-danger" onClick="return deleteconfirm();"><i class="zmdi zmdi-delete"></i>
</button>
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
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->
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
