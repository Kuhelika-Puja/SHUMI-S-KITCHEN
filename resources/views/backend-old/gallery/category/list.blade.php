@extends('backend.layouts.master')
@section('page-title','Menus')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        {{-- <div class="container"> --}}
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title-box">
                        <h4 class="page-title float-left">Gallery Category List</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashoard</a></li>
                            <li class="breadcrumb-item active">Gallery Category</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                          @include('backend.partials._message')
                           <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <a href="{{route('gallery-category.create')}}" class="btn btn-outline-info">Create Gallery Category</a><br><br>
                                <thead>
                                    <th data-priority="0">Sl.</th>
                                    <th data-priority="1">Title</th>
                                    <th data-priority="1">Description</th>
                                    <th data-priority="1">Position</th>
                                    <th data-priority="1">Image</th>
                                    <th data-priority="3">Status</th>
                                    <th data-priority="1">Date</th>
                                    <th data-priority="3">Action</th>
                                </thead>
                                <tbody>
                                    @foreach($gallery_category as $key=>$category)
                                        <tr>
                                            <td>{{$key +1}}</td>
                                            <td>{{$category->category}}</td>
                                            <td>{{$category->description}}</td>
                                            <td>{{$category->position}}</td>

                                            <td>
                                                <img src="{{url($category->image)}}" alt="" style="height: 100px;width: 100px;object-fit: contain;">
                                            </td>

                                            <td>
                                                <span class="label <?php if($category->status==1){?>label-success <?php } else {?> label-danger <?php } ?>"> <?php if($category->status==1){?>Active <?php }else {?>Inactive<?php } ?></span>
                                            </td>
                                            <td>{{$category->created_at}}</td>
                                            <td> 
                                                <a href="{{route('gallery-category.edit',$category->id)}}" class="btn btn-outline-info"><i class="zmdi zmdi-edit"></i></a>
    
                                                <form action="{{route('gallery-category.destroy',$category->id)}}" method="POST" style="display: inline-block;">
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
        {{-- </div> --}}
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






























