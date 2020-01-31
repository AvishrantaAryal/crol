@extends('cd-admin.home-master')

@section('page-title')	
Home
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard
		</h1>
		<ol class="breadcrumb">
			<li><i class="fa fa-dashboard"></i> Dashboard</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
						
			
			<!-- ./col -->
		</div>
		<!-- /.row -->
		<!-- Main row -->
		<div class="row">
			<!-- Left col -->
			<section class="col-lg-7 connectedSortable">
				<!-- Custom tabs (Charts with tabs)-->
				<!-- /.nav-tabs-custom -->

				

				<!-- quick email widget -->
				<div class="box box-info">
					@if(Session::has('success'))
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong> SEND SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
					</div>
					@endif
					<div class="box-header">
						<i class="fa fa-envelope"></i>

						<h3 class="box-title">Quick Email</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">
							<button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i>
							</button>
						</div>
						<!-- /. tools -->
					</div>
					<div class="box-body">
						<form action="{{url('quickmessage')}}" method="post">
							{{csrf_field()}}
							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Email to:" required="">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="subject" placeholder="Subject" required="">
							</div>
							<div>
								<textarea class="textarea" name="message" required="message" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
							</div>
					
					</div>
					<div class="box-footer clearfix">
						<button type="submit" class="pull-right btn btn-default" id="sendEmail">Send
							<i class="fa fa-arrow-circle-right"></i>
						</button>
					</div>
					</form>
				</div>
			</section>
			<!-- /.Left col -->
			<!-- right col (We are only adding the ID to make the widgets sortable)-->
			<section class="col-lg-5 connectedSortable">

				<!-- Map box -->
				<!-- /.box -->

				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Recently Added </h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i>
							</button>
							<!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
						</div>
					</div>
					<!-- /.box-header -->
					
					<div class="box-body">
						<ul class="products-list product-list-in-box">
							<li class="item">
								<div class="product-info" style="margin-left: 10px;">
									<a href="javascript:void(0)" class="product-title">{{$user->name}}
										<span class="label label-success pull-right">Active</span>
									
									</a>
									<span class="product-description">
										{{$user->role}}
									</span>

								</div>
							</li>
							
							
						</ul>
					</div>
					
					<!-- /.box-body -->
					<div class="box-footer text-center">
						<a href="{{url('view-all-admin')}}" class="uppercase">View All Users</a>
					</div>
					<!-- /.box-footer -->
				</div>
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Quick mail </h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i>
							</button>
							
						</div>
					</div>
					<!-- /.box-header -->
					
					
					<div class="box-body">
						
						<table class="table table-hover table-striped">

						@foreach($mail as $t)
						<tr>
							<td class="mailbox-name">{{$t->email}}</td>
							<td class="mailbox-subject">{{$t->subject}}</td>
							<td class="mailbox-subject">{!!str_limit($t->message,$limit='20')!!}</td>
					</tr>
						@endforeach
					</table>
					</div>
					<div class="box-footer text-center">
						<a href="{{url('view-all-mails')}}" class="uppercase">View All Mails</a>
					</div>
				
					<!-- /.box-footer -->
					</div>

				
					<!-- /.box-footer -->
				
			</section>
			<!-- right col -->
		</div>
		<!-- /.row (main row) -->

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->



@endsection