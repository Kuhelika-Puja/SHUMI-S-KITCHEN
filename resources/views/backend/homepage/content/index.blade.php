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
                            <button type="button" class="btn btn-info btn-sm mb-3" data-toggle="modal" data-target="#homepage">Add New <i class="fa fa-plus"></i></button>
                            @include('backend.partials._message')
                           <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Heading</th>
                                        <th>Content</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datas as $key=>$data)
                                    <tr>
                                        <td>{{ $key +1 }}</td>
                                        <td>{{ $data->heading }}</td>
                                        <td>{{ $data->content }}</td>
                                        <td>{{ $data->status }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('homepage.show', $data->id) }}" class="btn btn-outline-info mr-2">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ route('homepage.edit', $data->id) }}" class="btn btn-outline-info mr-2">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('homepage.destroy', $data->id) }}" method="POST" style="display: inline-block;">{{csrf_field()}}
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
<!-- Hompage modal Start-->
<div class="modal fade" id="homepage" tabindex="-1" role="dialog" aria-labelledby="homepageLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="homepageLabel">Add New Content</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('homepage.store') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                <label for="heading" class="col-form-label">Heading:</label>
                <input type="text" class="form-control" id="heading" name="heading">
                </div>
                <div class="form-group">
                <label for="content" class="col-form-label">Content:</label>
                <textarea class="form-control" id="content" rows="8" name="content"></textarea>
                </div>
                <div class="form-group">
                    <label for="status">Select Status</label>
                    <select class="form-control" id="status" name="status">
                      <option>Select Status</option>
                      <option value="1">Active</option>
                      <option value="0">Inactive</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-info btn-sm">Send</button>
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            </div>
        </form>
      </div>
    </div>
  </div>
<!-- Hompage modal Edn-->

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