@extends('admin.layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Watch Now </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active"> Watch Now </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="container">
        <div class="container-feild">

            @include('_message')

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Watch now Page</h3>
                        </div>

                        <form class="form-horizontal" action="{{ url('admin/watch_now/post')}}" method="post" enctype="multipart/form-data">
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
                                    <label class="col-sm-2 col-form-label"> Url <span style="color: red"> *</span>
                                    </label>

                                    <div class="col-sm-10">
                                        <input type="text" name="url" class="form-control" placeholder="Enter Url" value="{{ @$getRecord[0]->url }}" required>

                                        <span style="color: red"> {{ $errors->first('url')}} </span>
                                    </div>
                                </div>

                                <input type="hidden" name="id" value="{{ @$getRecord[0]->id }}">

                            </div>

                            <div class="card-footer">

                                <button type="submit" name="add_to_update" class="btn btn-primary" value="@if (count($getRecord)>0 ) Update @else Add @endif" > @if (count($getRecord)>0 ) Update @else Add @endif </button>
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
