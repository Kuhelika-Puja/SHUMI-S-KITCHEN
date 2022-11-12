@extends('backend.layouts.master')
@section('page-title','About us')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <br><br>
            
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            
                            
                            <h1 class="text-center">About us</h1>
                            @include('backend.partials._message')
                            <div class="" id="">
                                <div class="card">
                                    
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <form action="{{route('aboutus.store')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="update_id" value="{{$aboutus->id}}">
                                                {{-- <div class="form-group">
                                                    <label for="">Title</label>
                                                    <input type="text" class="form-control" name="title" value="{{$aboutus->title}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Sub Title</label>
                                                    <input type="text" class="form-control" name="subtitle" value="{{$aboutus->subtitle}}">
                                                </div> --}}
                                                <div class="form-group">
                                                    <label for="">Description</label>
                                                    <textarea name="description" id="" cols="5" rows="5" class="form-control summernote">{!! $aboutus->description !!}</textarea>
                                                </div>
                                                <!-- <div class="form-group">
                                                    <label for="">Image One</label>
                                                    <input type="file" class="form-control" name="image_one">
                                                    <?php echo "<img src='".asset($aboutus->image_one)."' style='height:30px;'/>";?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Image Two</label>
                                                    <input type="file" class="form-control" name="image_two">
                                                    <?php echo "<img src='".asset($aboutus->image_two)."' style='height:30px;'/>";?>
                                                </div> -->
                                                <br>
                                                <input type="submit" class="btn btn-success" value="Update">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection