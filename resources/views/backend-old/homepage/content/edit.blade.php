@extends('backend.layouts.master')
@section('page-title','Contact')
@section('page-content')

<div class="content">
    <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-md-8 offset-md-2">
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
@endsection
@section('backend-scripts')
 		
@endsection