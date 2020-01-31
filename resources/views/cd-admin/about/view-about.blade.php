@extends('cd-admin.home-master')
@section('page-title')  
About Details
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="container-fluid">
  
  <section class="content-header">
    <h1>
      About
    </h1>
   <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">About</a></li>
        <li class="active">View About</li>
      </ol>
  </section>
  @if(Session::has('updatesuccess'))
        <div class="alert alert-info alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Data Updated Successfully</strong>
          {{Session::get("message", '')}}
        </div>
        @endif

  <!-- Main content -->
    <section class="content">
      <div>
        <a href="{{url('/editabout')}}"><button class="btn btn-info"><i class="fa fa-edit"></i></button></a>
        
  
      </div>
       <div class="row">

        <div class="col-md-12"><center>
        <img src="{{url('/imageupload/'.$about->image)}}" style="height:300px;"></p>
      </center>

      <div class="col-md-8">
        <strong>Summary</strong>
        <p>{!!$about->summary!!}</p>
      </div>

      <div class="col-md-8">
        <strong>Description</strong>
        <p>{!!$about->description!!}</p>
      </div>
      <div class="col-md-8">
        <strong>Establishment Information</strong>
        <p>{!!$about->establishment!!}</p>
      </div>
      <div class="col-md-8">
        <strong>Objectives</strong>
        <p>{!!$about->objective!!}</p>
      </div>
      <div class="col-md-8">
        <strong>Mission</strong>
        <p>{!!$about->mission!!}</p>
      </div>
    
  </section>
  
  </div>
</div>




       
@endsection