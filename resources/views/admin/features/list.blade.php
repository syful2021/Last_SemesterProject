@extends('admin.layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Features </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active"> Features </li>
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
                            <h3 class="card-title"> Features Page</h3>
                        </div>

                        <form class="form-horizontal" action="{{ url('admin/features/post')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title<span style="color: red"> *</span>
                                    </label>

                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control" placeholder="Enter title" value="{{ @$getRecord[0]->title}}" required>

                                        <span style="color: red"> {{ $errors->first('title')}} </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description</label>

                                    <div class="col-sm-10">
                                        <textarea type="text" name="description" class="form-control" placeholder="Enter Descriptin"  >{{ @$getRecord[0]->description}}</textarea>
                                        <span style="color: red"> {{ $errors->first('description')}} </span>
                                    </div>
                                </div>

                                <hr>
                                {{-- Name One  --}}
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"> Name One <span style="color: red"> *</span>
                                    </label>

                                    <div class="col-sm-10">
                                        <input type="text" name="name_one" class="form-control" placeholder="Enter name_one " value="{{ @$getRecord[0]->name_one}}" required>

                                        <span style="color: red"> {{ $errors->first('name_one')}} </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description One</label>

                                    <div class="col-sm-10">
                                        <textarea type="text" name="description_one" class="form-control" placeholder="Enter Descriptin One"  > {{ @$getRecord[0]->description_one}} </textarea>
                                        <span style="color: red"> {{ $errors->first('description_one')}} </span>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Name Two<span style="color: red"> *</span>
                                    </label>

                                    <div class="col-sm-10">
                                        <input type="text" name="name_two" class="form-control" placeholder="Enter name_two" value="{{ @$getRecord[0]->name_two}}" required>

                                        <span style="color: red"> {{ $errors->first('name_two')}} </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description Two</label>

                                    <div class="col-sm-10">
                                        <textarea type="text" name="description_two" class="form-control" placeholder="Enter Descriptin Two"  > {{ @$getRecord[0]->description_two}} </textarea>
                                        <span style="color: red"> {{ $errors->first('description_two')}} </span>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Name Three<span style="color: red"> *</span>
                                    </label>

                                    <div class="col-sm-10">
                                        <input type="text" name="name_three" class="form-control" placeholder="Enter name_three" value="{{ @$getRecord[0]->name_three}}" required>

                                        <span style="color: red"> {{ $errors->first('name_three')}} </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description Three</label>

                                    <div class="col-sm-10">
                                        <textarea type="text" name="description_three" class="form-control" placeholder="Enter Descriptin Three"  > {{ @$getRecord[0]->description_three}} </textarea>
                                        <span style="color: red"> {{ $errors->first('description_three')}} </span>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Name Four<span style="color: red"> *</span>
                                    </label>

                                    <div class="col-sm-10">
                                        <input type="text" name="name_four" class="form-control" placeholder="Enter name_four" value="{{ @$getRecord[0]->name_four}}" required>

                                        <span style="color: red"> {{ $errors->first('name_four')}} </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description Four</label>

                                    <div class="col-sm-10">
                                        <textarea type="text" name="description_four" class="form-control" placeholder="Enter Descriptin Four"  > {{ @$getRecord[0]->description_four}} </textarea>
                                        <span style="color: red"> {{ $errors->first('description_four')}} </span>
                                    </div>
                                </div>

                                <hr>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Name Five<span style="color: red"> *</span>
                                    </label>

                                    <div class="col-sm-10">
                                        <input type="text" name="name_five" class="form-control" placeholder="Enter name Five" value="{{ @$getRecord[0]->name_five}}" required>

                                        <span style="color: red"> {{ $errors->first('name_five')}} </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description Five</label>

                                    <div class="col-sm-10">
                                        <textarea type="text" name="description_five" class="form-control" placeholder="Enter Descriptin Five"  > {{ @$getRecord[0]->description_five}} </textarea>
                                        <span style="color: red"> {{ $errors->first('description_five')}} </span>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Name Six<span style="color: red"> *</span>
                                    </label>

                                    <div class="col-sm-10">
                                        <input type="text" name="name_six" class="form-control" placeholder="Enter name_six" value="{{ @$getRecord[0]->name_six}}" required>

                                        <span style="color: red"> {{ $errors->first('name_six')}} </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description Six</label>

                                    <div class="col-sm-10">
                                        <textarea type="text" name="description_six" class="form-control" placeholder="Enter Descriptin Six"  > {{ @$getRecord[0]->description_six}} </textarea>
                                        <span style="color: red"> {{ $errors->first('description_six')}} </span>
                                    </div>
                                </div>
                                <hr>
                                {{-- image --}}
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Image<span style="color: red"> *</span>
                                    </label>

                                    <div class="col-sm-10">
                                        <input type="file" name="image" class="form-control"  >

                                        @if(@$getRecord[0]->image)
                                            <img src="{{ url('public/features/'.@$getRecord[0]->image) }}" width="100" height="100">
                                        @endif
                                    </div>
                                </div>

                                <input type="hidden" name="id" value="{{ @$getRecord[0]->id }}">

                            </div>

                            <div class="card-footer">

                                <button type="submit" name="add_to_update" class="btn btn-primary" value="@if (count($getRecord)>0 ) Update @else Add @endif" > @if (count($getRecord)>0 ) Update @else Add @endif </button>
                                {{-- <button type="submit" class="btn btn-primary"> add </button> --}}
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
