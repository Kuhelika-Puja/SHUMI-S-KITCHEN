@extends('backend.layouts.master')
@section('page-title','Contact')
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
                           <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <th>Sl.</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Description </th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($product as $key=>$data)
                                        <tr>
                                            <td>{{$key +1}}</td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->price}}</td>
                                            <td>{{$data->description}}</td>
                                            <td>
                                                <img src="{{url($data->image)}}" alt="" style="height: 100px;width: 100px;object-fit: contain;">
                                            </td>
                                            <td class="d-flex">
                                                <a href="{{route('product.edit',$data->id)}}" class="btn btn-outline-info btn-sm mr-1"><i class="zmdi zmdi-edit"></i></a>
                                                <form action="{{route('product.destroy',$data->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-outline-danger btn-sm" type="submit" onClick="return deleteconfirm();"><i class="fa fa-trash"></i></button>
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