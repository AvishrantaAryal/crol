@extends('cd-admin.home-master')

@section('page-title')  
Add About
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
  Add About
  </h1>
  
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">About</a></li>
        <li class="active">Add About</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
       
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">About Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action= "{{url('aboutstore')}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="About Title" class="col-sm-2 control-label">About Title<span style="color: red;">*</span></label>
                  <div class="text text-danger">{{$errors->first('title')}}</div>

                  <div class="col-sm-10">
                      <input type="text" class="form-control"required="" name="title" id="title" value="{{old('title')}}" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="image" class="col-sm-2 control-label">Image<span style="color: red;">*</span></label>
                      <div class="text text-danger">{{$errors->first('image')}}</div>
                  <div class="col-sm-10">
                     <input type="file" class="form-control" required="" id="image" name="image" value="{{old('image')}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="altimage" class="col-sm-2 control-label">Image<br>Description<span style="color: red;">*</span></label>
                  <div class="text text-danger">{{$errors->first('image_alt')}}</div>

                  <div class="col-sm-10">
                      <input type="text" class="form-control"required="" name="image_alt" id="image_alt" value="{{old('image_alt')}}" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="Summary" class="col-sm-2 control-label">Summary<span style="color: red;">*</span></label>
                    <div class="text text-danger">{{$errors->first('summary')}}</div>
                  <div class="col-sm-10">
                      <textarea class="form-control" rows="6" name="summary" required="" >
                {{old('summary')}}
              </textarea>
                  </div>
                </div>


                <div class="form-group">
                  <label for="Description" class="col-sm-2 control-label">Description<span style="color: red;">*</span>
                  </label>
                  <div class="text text-danger">{{$errors->first('description')}}</div>
                  <div class="col-sm-10">
                      <textarea id="summernote" class="form-control" name="description" required=""  >
                {{old('description')}}
              </textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="Establishment" class="col-sm-2 control-label">Establishment<br>Information<span style="color: red;">*</span></label>
                    <div class="text text-danger">{{$errors->first('establishment')}}</div>
                  <div class="col-sm-10">
                      <textarea class="form-control" rows="6" name="establishment" required="" >
                {{old('establishment')}}
              </textarea>
                  </div>
                </div>


                <div class="form-group">
                  <label for="Objectives" class="col-sm-2 control-label">Objectives<span style="color: red;">*</span></label>
                    <div class="text text-danger">{{$errors->first('objective')}}</div>
                  <div class="col-sm-10">
                      <textarea class="form-control" rows="6" name="objective" required="" >
                {{old('objective')}}
              </textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="Mission" class="col-sm-2 control-label">Mission<span style="color: red;">*</span></label>
                    <div class="text text-danger">{{$errors->first('mission')}}</div>
                  <div class="col-sm-10">
                      <textarea class="form-control" name="mission" required="" rows="6" >
                {{old('mission')}}
              </textarea>
                  </div>
                </div>
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                 <a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-success pull-right">Add About</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
          
          <!-- /.box -->
        </div>
        
        
      </div>
    </section>


</div>


@endsection