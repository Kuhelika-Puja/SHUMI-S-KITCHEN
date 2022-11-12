@extends('backend.layouts.master')
@section('page-title','Today Buy Now Order List')
@section('page-content')
<div class="content">
  <div class="container-fluid">
    <div class="container">
      <br><br>
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
            <div class="card-head text-white" style="background-color: #2B3D51;">
              <h3 class="p-3">Today Buy Now Order List</h3>
            </div>
            <div class="card-body">
              @include('backend.partials._message')
              <div class="table-rep-plugin">
                <div class="table-responsive mb-0" data-pattern="priority-columns">
                  <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                      <th>Sl.</th>
                      <th>Product Name</th>
                      <th>Invoice Id</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Total Price</th>
                      <th>Action</th>
                    </thead>
                    <tbody>
                      @foreach($orders as $key=> $order)
                      <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $order->products->name }}</td>
                        <td>{{ $order->invoice_id }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->email }}</td>
                        <td> <?php echo $order->products->price * $order->quentity; ?> </td>
                        <td class="d-flex">
                          <a href="{{ url('admin/buynow/manage',$order->id) }}" class="btn btn-info btn-sm">Show</a>
                          
                            <a class="btn btn-danger btn-sm" href="{{ url('admin/buynow/delete',$order->id) }}">Del</a>
                        
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
  </div>
</div>
<script>
function deleteconfirm()
{
deletedata = confirm("Are you sure to delete this order permanently?");
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