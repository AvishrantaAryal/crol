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
<div class="container pad-top pad-bot gallery-bg">
	<h4>Gallery</h4>
	<div class="container">
		<div class="row">
			@foreach($gallery as $g)
			<div class="col-md-4">
				<div class="gallery-image">
					<a class="fancybox" href="{{url('/imageupload/'.$g['image'])}}" rel="lightbox">
						<img class="img-fluid" src="{{url('/imageupload/'.$g['image'])}}" alt="{{$g['image_alt']}}"/>
					</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>	
</div>
	<script type="text/javascript">
		$(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
    	openEffect: "none",
    	closeEffect: "none"
    });
});
</script>
@endsection