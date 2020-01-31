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
<div class="container pad-top about-heading">
	<h4>{{$about['title']}}</h4>
	<div class="about-image">
		<img class="img-fluid" alt="" src="{{url('/imageupload/'.$about['image'])}}">
	</div>
	<div class="about-detail">
		<p>{!!$about['description']!!}</p>
	</div>
</div>

<div class="container pad-top pad-bot">
	<div class="row">
		<div class="col-md-12 about-bg-title about-bg">
			<h5>Establishment</h5>
			<hr style="width: 190px;">
			<p>{!!$about['establishment']!!}
			</p>
		</div>

		<div class="col-md-12 about-bg-title about-bg1">
			<h5>Mission</h5>
			<hr style="width: 190px;">
			<p>{!!$about['mission']!!}</p>
		</div>

		<div class="col-md-12 about-bg-title about-bg-2">
			<h5>Objective</h5>
			<hr style="width: 190px;">
			<p>{!!$about['objective']!!}</p>
			</ol>
		</div>
	</div>
</div>

@endsection