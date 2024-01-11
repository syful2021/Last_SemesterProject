@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Testimonials list </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active"> Testimonials list </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                @include('_message')

                <a href="{{ url('admin/testimonials/add') }} " class="btn btn-primary" style="margin-bottom: 13px" > Add Testimonials </a>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Position Name</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($getRecord as $value )
                                        <tr>
                                            <td>{{ $value->id}}</td>
                                            <td>
                                                @if(!empty($value->image))
                                                    <img src=" {{ url('public/testimonials/'.$value->image) }}" style="height: 80px; width: 80px;" >
                                                @endif
                                            </td>
                                            <td> {{ $value->name}} </td>
                                            <td>{{ $value->position_name}}</td>
                                            <td>{{ $value->description}}</td>
                                            <td>
                                                <a href="{{ url('admin/testimonials/edit/'.$value->id) }}" class="btn btn-primary"> Edit </a>

                                                <a onclick="return confirm('Are you want to delete?')" href="{{ url('admin/testimonials/delete/'.$value->id) }}" class="btn btn-danger"> Delete </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>
@endsection
