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
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Message</th>
                                        <!--<th>Date</th>-->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($contacts as $key=>$contact)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$contact->name}}</td>
                                            <td>{{$contact->subject}}</td>
                                            <td>{{$contact->email}}</td>
                                            <td>{{$contact->tel}}</td>
                                            <td>{{$contact->message}}</td>
                                            <!--<td>{{$contact->created_at}}</td>-->
                                            <td class="d-flex">
                                                <a href="{{ route('contactus.show',$contact->id) }}" class="btn btn-outline-info mr-1">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                                                                <a href="{{ route('contactus.edit',$contact->id) }}" class="btn btn-outline-info mr-1">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form action="{{route('contactus.destroy',$contact->id)}}" method="POST" style="display: inline-block;">{{csrf_field()}}
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger" onClick="return deleteconfirm();"><i class="zmdi zmdi-delete"></i>
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