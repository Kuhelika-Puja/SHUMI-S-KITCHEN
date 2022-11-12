@extends('backend.layouts.master')
@section('page-title','Menus')
@section('page-content')
 <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card-box">

                        <div class="table-rep-plugin">
                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead class="thead-default">
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Location</th>
                                        <th>Qnt</th>
                                        <th>Invoice ID</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($buyNow as $key=>$data)
                                        <tr>
                                            <td>{{$key +1}}</td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->phone}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->address}}</td>
                                            <td>{{$data->location}}</td>
                                            <td>{{$data->quantity}}</td>
                                            <td>{{$data->invoice_id}}</td>
                                            <td>{{$data->created_at}}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('buynow.show',$data->id) }}" class="btn btn-info">Show</a>
                                                <form action="{{route('buynow.destroy',$data->id)}}" method="post">
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
