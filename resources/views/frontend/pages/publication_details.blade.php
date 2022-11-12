@extends('frontend.layouts.master')
@section('metatag')
<meta property="og:url"                content="http://womenindigital.net/" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="{{$publications->title}}" />
<meta property="og:description"        content="" />
<meta property="og:image"              content="{{ url($publications->image)}}" />
@endsection
@section('page-title',' | Blog')
@section('style')
<link rel="stylesheet" href="{{url('frontend/css/lightbox.min.css')}}">
<style>
.description p {
text-align: justify !important;
}
</style>
@endsection
@section('page-content')
<section class="blog">
  <div class="container-fluid">
    
    <div class="row mb-5 justify-content-center">
      <div class="col-md-6" style="padding: 0px;">
        <div class="">
          <?php
            if(isset($publications->image) && !empty($publications->image)){
          ?>
          <div class="heading">
            <h1>{{$publications->title}}</h1>
            <p class="text-muted mp-0"><i class="far fa-user pr-4"></i> By Shumi's Kitchen</p>
            <p class="text-muted"> <i class="far fa-clock  pr-4"></i> Updated {{$publications->created_at}}</p>
          </div>
          <img src="{{ url($publications->image)}}" class="card-img-top" alt="..." style="width: 100%">
          <?php }else{ ?>
          <img src="{{url('frontend/image/blog.jpg')}}" class="card-img-top" alt="...">
          <?php } ?>
          
        </div>
      </div>
      <div class="col-md-4">
        <h3>Recent Blog</h3> <br> <hr> <br> 
        <?php
        $recentblog = DB::table('publications')->orderBy('created_at','desc')->limit(5)->get();
        foreach($recentblog as $b){
        ?>
        <a href="{{url('/publication/id',$b->id)}}" class="h3">
          <div class="media p-3 mb-4 shadow" style="box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;">
            <img src="{{ url($b->image)}}" class="mr-3" alt="..." style="height: 64px;border:1px solid #ddd;">
            <div class="media-body">
              <h5 class="mt-0">{{$b->title}}</h5>
            </div>
          </div>
        </a>
        <?php } ?>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        
        <div class="">
          
          <h2 class="">Over View</h2> <hr> 
          
          <p class="card-text">{!! $publications->description !!}</p>
          
          
        </div>
        
      </div>
      <div class="col-md-2"></div>
    </div>
    
    
  </div>
</section>

@endsection
@section('scripts')
<script src="{{url('frontend/js/lightbox.min.js')}}"></script>
<script>
jQuery(".description").text(function (i, text) {
return text.length > 100 ? text.substr(0, text.lastIndexOf(' ', 550)) + '...' : text;
});
</script>
@endsection