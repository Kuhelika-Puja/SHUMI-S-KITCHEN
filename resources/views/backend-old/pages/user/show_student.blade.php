@extends('backend.layouts.master')
@section('page-title','Student')
@section('page-content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Users</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashoard</a></li>
                        <li class="breadcrumb-item active">users</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <div class="studen-details">
                                        
                                        <p>First Name :<b>{{$users->f_name}}</b></p>
                                        <p>Last Name :<b>{{$users->l_name}}</b></p>
                                        <p>Number :<b>{{$users->number}}</b></p>
                                        <p>Parent Number :<b>{{$users->parent_number}}</b></p>
                                        <p>Date of Birth :<b>{{$users->dob}}</b></p>
                                        <p>Gender:<b>{{$users->gender}}</b></p>
                                        <p>NID:<b><?php echo "<img src='".asset($users->nid)."' style='height:100px;width:100px;'/>";?></b></p>
                                        <p>Native Language:<b>{{$users->n_lan}}</b></p>
                                        <p>2nd Language:<b>{{$users->s_lan}}</b></p>
                                        <p>TNR:<b>{{$users->tnr}}</b></p>
                                        <p>Address:<b>{{$users->address}}</b></p>
                                        <p>Upozila:<b>{{$users->upozila}}</b></p>
                                        <p>District:<b>{{$users->district}}</b></p>
                                    </div>  
                                </div>
                                <div class="col-md-6">
                                    <?php
                                        if($users->user_type == 3){
                                            $franchise = DB::table('franchise_profiles')->where('user_id',$users->id)->first();
                                            if(isset($franchise)){
                                    ?>
                                    <p>Company Name : {{$franchise->company_name}}</p>
                                    <p>Owner Name : {{$franchise->owner_name}}</p>
                                    <p>Owner Gender : {{$franchise->owner_gender}}</p>
                                    <p>Owner Profession : {{$franchise->owner_current_profession}}</p>
                                    <p>Business Location : {{$franchise->business_location}}</p>
                                    <p>Bank Account Details : {{$franchise->bank_account_details}}</p>
                                    <p>Type Of Internet : {{$franchise->type_of_internet}}</p>
                                    <?php

                                     // echo "<img src='".asset($franchise->lisence)."' style='height:100px;width:100px;'>";
                                     // echo "<img src='".asset($franchise->internet_speed_screenshot)."' style='height:100px;width:100px;'>";
                                     // echo "<img src='".asset($franchise->class_room_pic)."' style='height:100px;width:100px;'>";
                                     ?>
                                     <figure class="figure">
                                      <?php echo "<img src='".asset($franchise->lisence)."' class='figure-img img-fluid rounded' style='height:100px;width:100px;'>";?>
                                      <figcaption class="figure-caption">Lisence</figcaption>
                                    </figure>

                                     <figure class="figure">
                                      <?php echo "<img src='".asset($franchise->internet_speed_screenshot)."' class='figure-img img-fluid rounded' style='height:100px;width:100px;'>";?>
                                      <figcaption class="figure-caption">Internet Screenshot</figcaption>
                                    </figure>
                                    
                                     <figure class="figure">
                                      <?php echo "<img src='".asset($franchise->class_room_pic)."' class='figure-img img-fluid rounded' style='height:100px;width:100px;'>";?>
                                      <figcaption class="figure-caption">Class Romm Image</figcaption>
                                    </figure>
                                    <?php
                                        if($franchise->status == '0'){
                                    ?>
                                    <form action="{{url('admin/approved/franchise')}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{$franchise->id}}" name="franchise_id">
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-info btn-lg" value="Approve">
                                        </div>
                                    </form>
                                    <?php
                                }else{
                                    echo "<br>";
                                    echo "<b>Already Approved</b>";
                                }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>

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

