@extends('admin.layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Home </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- /.content -->

    <section class="container">
        <div class="container-feild">

            @include('_message')

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Home Page</h3>

                        </div>
                        <form class="form-horizontal" action="{{ url('admin/home/post')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title<span style="color: red"> *</span>
                                    </label>

                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control" placeholder="Enter title" value="{{ @$getRecord[0]->title }}" required>

                                        <span style="color: red"> {{ $errors->first('title')}} </span>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Sub Title<span style="color: red"> *</span>
                                    </label>

                                    <div class="col-sm-10">
                                        <input type="text" name="sub_title" class="form-control" placeholder="Enter sub_title" value="{{ @$getRecord[0]->sub_title }}"  required>

                                        <span style="color: red"> {{ $errors->first('sub_title')}} </span>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Home Url<span style="color: red"> *</span>
                                    </label>

                                    <div class="col-sm-10">
                                        <input type="text" name="home_url" class="form-control" placeholder="Enter home_url" value="{{ @$getRecord[0]->home_url }}" required>

                                        <span style="color: red"> {{ $errors->first('home_url')}} </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Sub Title Two<span style="color: red"> *</span>
                                    </label>

                                    <div class="col-sm-10">
                                        <input type="text" name="sub_title_two" class="form-control" placeholder="Enter sub_title_two" value="{{ @$getRecord[0]->sub_title_two }}"  required>

                                        <span style="color: red"> {{ $errors->first('sub_title_two')}} </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description</label>

                                    <div class="col-sm-10">
                                        <textarea type="text" name="description" class="form-control" placeholder="Enter Descriptin"  >  {{ @$getRecord[0]->description }} </textarea>
                                        <span style="color: red"> {{ $errors->first('description')}} </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Image One<span style="color: red"> *</span>
                                    </label>

                                    <div class="col-sm-10">
                                        <input type="file" name="image_one" class="form-control"  >

                                        {{-- this is for auto drop img --}}

                                        @if(@$getRecord[0]->image_one)
                                            <img src="{{ url('public/img/'.@$getRecord[0]->image_one) }}" width="100" height="100"  alt="image_one">
                                        @endif

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Image Two<span style="color: red"> *</span>
                                    </label>

                                    <div class="col-sm-10">
                                        <input type="file" name="image_two" class="form-control"  >

                                        {{-- this is for auto drop img --}}

                                        @if(@$getRecord[0]->image_one)
                                            <img src="{{ url('public/img/'.@$getRecord[0]->image_two) }}" width="100" height="100"  alt="image_one">
                                        @endif

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Image Three<span style="color: red"> *</span>
                                    </label>

                                    <div class="col-sm-10">
                                        <input type="file" name="image_three" class="form-control"  >

                                        {{-- this is for auto drop img --}}

                                        @if(@$getRecord[0]->image_one)
                                            <img src="{{ url('public/img/'.@$getRecord[0]->image_three) }}" width="100" height="100"  alt="image_one">
                                        @endif

                                    </div>
                                </div>

                                <input type="hidden" name="id" value="{{ @$getRecord[0]->id}}" >

                            <div class="card-footer">

                                <button type="submit" name="add_to_update" value="@if(count($getRecord)>0) Update @else Add @endif" class="btn btn-primary">
                                    @if(count($getRecord)>0) Update @else Add @endif
                                </button>
                                <a href="" class="btn btn-default float-right"> Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>



@endsection
