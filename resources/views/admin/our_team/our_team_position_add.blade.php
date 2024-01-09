@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Position Our Team </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active"> Position Our Team </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title"> Add Position Our Team </h3>
                            </div>
                            {{-- form --}}
                            <form class="form-horizontal" action="{{ url('admin/our_team/add/{id}') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">

                                    <input type="hidden" name="our_team_id" value="{{ $getId }}">

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Image <span style="color: red"> *</span>
                                        </label>

                                        <div class="col-sm-10">
                                            <input type="file" name="image" class="form-control">

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Name <span style="color: red"> *</span>
                                        </label>

                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Enter Name" value="{{ old('name') }}" required>

                                            <span style="color: red;"> {{ $errors->first('name') }} </span>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Position Name <span style="color: red">
                                                *</span>
                                        </label>

                                        <div class="col-sm-10">
                                            <input type="text" name="position_name" class="form-control"
                                                placeholder="Enter Position Name" value="{{ old('position_name') }}"
                                                required>

                                            <span style="color: red;"> {{ $errors->first('position_name') }} </span>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">

                                    {{-- <button type="submit" name="add_to_update" value="@if (count($getRecord) > 0) Update @else Add @endif" class="btn btn-primary">
                                        @if (count($getRecord) > 0) Update @else Add @endif
                                    </button> --}}
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
