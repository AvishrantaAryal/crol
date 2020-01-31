@extends('frontend.home-master')

<!-- page title -->
@section('page-title')	
{{$seo['seo_title']}}
@endsection
@section('seo_description',$seo['seo_description'])
@section('seo_keyword',$seo['seo_keyword'])

<!-- website content -->
@section('content')

<div class="container-fluid top-bg"></div>


<div class="container-fluid pad-top contact-top">
	<h4>Get in touch</h4>
	<div class="row">
		<div class="col-md-4 contact-bg">
			<p><i class="fas fa-map-marker-alt fa-2x"></i></p> 
			<h5>Address</h5>
			<p class="contact-detail">Kathmandu, Nepal</p>
		</div>

		<div class="col-md-4 contact-bg">
			<p><i class="fas fa-envelope fa-2x"></i></p> 
			<h5>Email</h5>
			<p class="contact-detail">centerforruleoflaw@gmail.com</p>
		</div>
		<div class="col-md-4 contact-bg">
			<p><i class="fas fa-mobile-alt fa-2x"></i></p> 
			<h5>Phone</h5>
			<p class="contact-detail">+977-9843807185</p>
		</div>
	</div>
</div>
<div class="container pad-top pad-bot contact-top">
	@if(Session::has('Success'))
            <div class="alert alert-success alert-dismissible session_message">
              <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>We have recieved your Consultation.We will contact you soon.</strong>
              {{Session::get("message", '')}}
            </div>
    @endif
	<h4>Request consultation</h4>
	<div class="contact-border"></div>
	<hr style="width: 250px; margin-top: 0!important;">
	<form class="row" style="padding-top: 15px;" action="{{url('storecontact')}}" method="POST">
					@csrf	
			<div class="form-group mb-3 col-md-4">
				<input type="text" class="form-control" name="name" id="name" placeholder="Name">
			</div>
			<div class="form-group mb-3 col-md-4">
				<input type="email" class="form-control" id="email" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
			</div>
			<div class="form-group mb-3 col-md-4">
				<input type="number" class="form-control" id="phone" name="phoneno" placeholder="Phone number">
			</div>
		<div class="form-group mb-3 col-md-12">
			<textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="5" placeholder="Your message"></textarea>
		</div>
		<div class="container contact-btn-bg">
			<button type="submit" class="btn contact-btn"><p>Send Message</p></button>
		</div>
	</form>
</div>

<!-- <div class="container pad-top pad-bot">
	<h4>Get in touch</h4>
	<div class="row">
		<div class="col-md-6">
			<h5>Send us message</h5>
			<form>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Your name">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				</div>
				<div class="form-group">
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Type your message"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>

		<div class="col-md-6">
			<h5>Our Location</h5>
		</div>
	</div>
</div> -->	
@endsection

