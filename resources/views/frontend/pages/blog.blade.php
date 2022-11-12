@extends('frontend.layouts.master')
@section('page-title',' | Blog')
@section('style')
<style>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
.blog{
font-family: 'Open Sans Condensed', sans-serif;
}
</style>
@endsection
@section('page-content')

<section class="blog">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <form action="{{url('blog/search')}}" method="post">
          @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control custom-form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2" name="name">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>
  <br><br>
  <div class="container">
    <div class="row">
      
      <?php
      if(isset($blogs) && !empty($blogs)){
      ?>
      @foreach($blogs as $blog)
      <div class="col-md-4 py-3">
        <div class="">
          <?php
          if(isset($blog->image) && !empty($blog->image)){
          ?>
          <a href="{{url('blog',$blog->id)}}" class="font-weight-bold">
            <img src="{{url($blog->image)}}" class="card-img-top" alt="..." style="height: 300px;width: 100%;object-fit: cover;object-position: top;">
          </a>
          <?php
          }else{
          ?>
          <img src="{{url('frontend/image/blog.jpg')}}" class="card-img-top" alt="..." style="height: 300px;width: 100%;object-fit: cover;object-position: top;">
          <?php
          }
          ?>
          <div class="card-body custom-card-body text-center">
            <p class="card-title mp-0">{{$blog->title}}</p>
            <p class="mp-0"><?php //echo $blog->created_at->diffForHumans();?> <?php echo date('d M Y', strtotime($blog->created_at)); ?></p>
          </div>
        </div>
      </div>
      @endforeach
      
      <?php
      }else{
      echo "<h3 class='text-center'>No Blog Found</h3>";
      }
      ?>
    </div>
  </div>
</section>
@endsection
@section('scripts')
<script>
jQuery(".description").text(function (i, text) {
return text.length > 200 ? text.substr(0, text.lastIndexOf(' ', 150)) + '...' : text;
});
</script>
@endsection