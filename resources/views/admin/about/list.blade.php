@extends('admin.layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> About </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">About</li>
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
                            <h3 class="card-title">About Page</h3>
                        </div>


                        <form class="form-horizontal" action="{{ url('admin/about/post')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title<span style="color: red"> *</span>
                                    </label>

                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control" placeholder="Enter title" value="" required>

                                        <span style="color: red"> {{ $errors->first('title')}} </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description</label>

                                    <div class="col-sm-10">
                                        <textarea type="text" name="description" class="form-control" placeholder="Enter Descriptin"  >  </textarea>
                                        <span style="color: red"> {{ $errors->first('description')}} </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title One<span style="color: red"> *</span>
                                    </label>

                                    <div class="col-sm-10">
                                        <input type="text" name="title_one" class="form-control" placeholder="Enter title One" value="" required>

                                        <span style="color: red"> {{ $errors->first('title_one')}} </span>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description One</label>

                                    <div class="col-sm-10">
                                        <textarea type="text" name="description_one" class="form-control" placeholder="Enter Descriptin One"  >  </textarea>
                                        <span style="color: red"> {{ $errors->first('description_one')}} </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title Two<span style="color: red"> *</span>
                                    </label>

                                    <div class="col-sm-10">
                                        <input type="text" name="title_two" class="form-control" placeholder="Enter title Two" value="" required>

                                        <span style="color: red"> {{ $errors->first('title_two')}} </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description Two</label>

                                    <div class="col-sm-10">
                                        <textarea type="text" name="description_two" class="form-control" placeholder="Enter Descriptin One"  >  </textarea>
                                        <span style="color: red"> {{ $errors->first('description_two')}} </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title Three <span style="color: red"> *</span>
                                    </label>

                                    <div class="col-sm-10">
                                        <input type="text" name="title_three" class="form-control" placeholder="Enter title Three " value="" required>

                                        <span style="color: red"> {{ $errors->first('title_three')}} </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description Three</label>

                                    <div class="col-sm-10">
                                        <textarea type="text" name="description_three" class="form-control" placeholder="Enter Descriptin One"  >  </textarea>
                                        <span style="color: red"> {{ $errors->first('description_three')}} </span>
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">

                                <button type="submit" class="btn btn-primary"> Submit </button>
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
