@extends('frontend.home-master')

@section('page-title')	
{{$seo['seo_title']}}
@endsection
@section('seo_description',$seo['seo_description'])
@section('seo_keyword',$seo['seo_keyword'])

@section('content')
<!-- home carousel -->
<div class="swiper-container main-slider" id="myCarousel">
	<div class="swiper-wrapper">
		@foreach($carousel as $c)
		<div class="swiper-slide slider-bg-position" style="background:url('imageupload/{{$c['image']}}')" data-hash="{{$c->alt_image}}">
			<h2>{{$c['summary']}}</h2>
		</div>
		@endforeach
	</div>
	<!-- Add Pagination -->
	<!-- <div class="swiper-pagination"></div> -->
	<!-- Add Navigation -->
	<div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
	<div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
</div>


<!-- home about -->
<div class="container pad-bot home-about-bg">
	<div class="row">
		<div class="col-md-4 home-about-card home-about-card-1">
			<h4>
				Establishment
			</h4>
			<p>
				{!!substr($about['establishment'],0,305)!!}
			</p>
			<a href="{{url('/about')}}"><p>Read More</p></a>
		</div>
		<div class="col-md-4 home-about-card home-about-card-2">
			<h4>
				Objectives
			</h4>
			<p>
				{!!substr($about['objective'],0,305)!!}
			</p>
			<a href="{{url('/about')}}"><p>Read More</p></a>
		</div>
		<div class="col-md-4 home-about-card home-about-card-3">
			<h4>
				Mission
			</h4>
			<p>
				{!!substr($about['mission'],0,305)!!}
			</p>
			<a href="{{url('/about')}}"><p>Read More</p></a>
		</div>
	</div>
</div>

<div class="container pad-bot home-info-card">
	<h6>CROL NEPAL</h6>
	<h2>ABOUT THE CENTER</h2>
	<div class="row">
		<div class="offset-md-2 col-md-8">
			<p>
				{!!$about['summary']!!}
			</p>
		</div>
	</div>
	<a href="{{url('/about')}}"><p>Read More</p></a>
</div>


<div class="container-fluid home-parallax">
	<div class="container">
		<div class="row home-parallax-card">
			<div class="col-md-4">
				<div class="home-parallax-image">
					<img src="{{url('/imageupload/'.$back['image'])}}" alt="{{$back['image_alt']}}" class="img-fluid">
				</div>
			</div>
			<div class="col-md-8">
				<div class="">
					<h6>crol nepal</h6>
					<h4>Background</h4>
					<p>{!!$back['summary']!!}</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection