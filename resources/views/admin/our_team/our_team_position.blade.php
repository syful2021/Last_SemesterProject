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
                @include('_message')

                <a href="{{ url('admin/our_team/add/'.$getId) }} " class="btn btn-primary"> Add Position </a>
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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($getRecord as $value )
                                        <tr>
                                            <td>{{ $value->id}}</td>
                                            <td>
                                                @if(!empty($value->image))
                                                    <img src=" {{ url('public/our_team/'.$value->image) }}" style="height: 80px; width: 80px;" >
                                                @endif
                                            </td>
                                            <td> {{ $value->name}} </td>
                                            <td>{{ $value->position_name}}</td>
                                            <td>
                                                <a href="{{ url('admin/our_team/edit/'.$value->id) }}" class="btn btn-primary"> Edit </a>

                                                <a onclick="return confirm('Are you want to delete?')" href="{{ url('admin/our_team/delete/'.$value->id) }}" class="btn btn-danger"> Delete </a>
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
