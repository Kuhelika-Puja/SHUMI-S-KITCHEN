@extends('backend.layouts.master')
@section('page-title','Contact')
@section('page-content')

<div class="content">
    <div class="container-fluid">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <a href="{{ route('homepage.index') }}" class="btn btn-info btn-sm pb-2">Back</a>
              <form action="{{ route('homepage.update', $data->id) }}" method="POST" class="bg-light">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="form-group">
                    <label for="heading" class="col-form-label">Heading:</label>
                    <input type="text" class="form-control" id="heading" name="heading" value="{{ $data->heading }}">
                    </div>
                    <div class="form-group">
                    <label for="content" class="col-form-label">Content:</label>
                    <textarea class="form-control" id="content" rows="8" name="content">{{ $data->content }}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="status">Select Status</label>
                      <select class="form-control" id="status" name="status">
                        @if ($data->status == 1)
                        <option value="1">Active</option>
                        @else
                        <option value="0">Inactive</option>
                        @endif
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                      </select>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-sm">Send</button>
                </div>
              </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
@section('backend-scripts')
 		
@endsection

