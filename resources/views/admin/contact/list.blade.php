@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Contact </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active"> Contact </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="container">
            <div class="container-feild">

                @include('_message')

                <a href="{{ url('admin/contact/list') }}" class=" btn btn-primary" style="margin-bottom: 13px "> Add Contact list
                </a>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title"> Contact Page </h3>
                            </div>

                            {{-- form --}}
                            <form class="form-horizontal" action="{{ url('admin/contact/post') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ @$getRecord[0]->id }}">

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Title<span style="color: red"> *</span>
                                        </label>

                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Enter title" value="{{ @$getRecord[0]->title }}" required>

                                            <span style="color: red"> {{ $errors->first('title') }} </span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Description</label>

                                        <div class="col-sm-10">
                                            <textarea type="text" name="description" class="form-control" placeholder="Enter Descriptin">{{ @$getRecord[0]->description }} </textarea>
                                            <span style="color: red"> {{ $errors->first('description') }} </span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Address1 <span style="color: red"> *</span>
                                        </label>

                                        <div class="col-sm-10">
                                            <input type="text" name="address1" class="form-control"
                                                placeholder="Enter Address1" value="{{ @$getRecord[0]->address1 }}" required>

                                            <span style="color: red"> {{ $errors->first('address1') }} </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Address2 <span style="color: red"> *</span>
                                        </label>

                                        <div class="col-sm-10">
                                            <input type="text" name="address2" class="form-control"
                                                placeholder="Enter Address2" value="{{ @$getRecord[0]->address2 }}" required>

                                            <span style="color: red"> {{ $errors->first('address2') }} </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Phone1 <span style="color: red"> *</span>
                                        </label>

                                        <div class="col-sm-10">
                                            <input type="text" name="phone1" class="form-control"
                                                placeholder="Enter Phone1" value="{{ @$getRecord[0]->phone1 }}" required>

                                            <span style="color: red"> {{ $errors->first('phone1') }} </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Phone2 <span style="color: red"> *</span>
                                        </label>

                                        <div class="col-sm-10">
                                            <input type="text" name="phone2" class="form-control"
                                                placeholder="Enter Phone2" value="{{ @$getRecord[0]->phone2 }}" required>

                                            <span style="color: red"> {{ $errors->first('phone1') }} </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Email1 <span style="color: red"> *</span>
                                        </label>

                                        <div class="col-sm-10">
                                            <input type="text" name="email1" class="form-control"
                                                placeholder="Enter Email1" value="{{ @$getRecord[0]->email1 }}" required>

                                            <span style="color: red"> {{ $errors->first('email1') }} </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Email2 <span style="color: red"> *</span>
                                        </label>

                                        <div class="col-sm-10">
                                            <input type="text" name="email2" class="form-control"
                                                placeholder="Enter Email2" value="{{ @$getRecord[0]->email2 }}" required>

                                            <span style="color: red"> {{ $errors->first('email2') }} </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Working Hours 1 <span style="color: red"> *</span>
                                        </label>

                                        <div class="col-sm-10">
                                            <input type="text" name="working1" class="form-control"
                                                placeholder="Enter Working Hours 1" value="{{ @$getRecord[0]->working1 }}" required>

                                            <span style="color: red"> {{ $errors->first('working1') }} </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Working Hours 2 <span style="color: red"> *</span>
                                        </label>

                                        <div class="col-sm-10">
                                            <input type="text" name="working2" class="form-control"
                                                placeholder="Enter Working Hours2" value="{{ @$getRecord[0]->working2 }}" required>

                                            <span style="color: red"> {{ $errors->first('working2') }} </span>
                                        </div>
                                    </div>

                                </div>


                                <div class="card-footer">

                                    <button type="submit" name="add_to_update" class="btn btn-primary"
                                        value="@if (count($getRecord) > 0) Update @else Add @endif ">
                                        @if (count($getRecord) > 0)
                                            Update
                                        @else
                                            Add
                                        @endif
                                    </button>
                                    <a href="" class="btn btn-default float-right"> Cancel </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>

    </section>


    </div>
@endsection
