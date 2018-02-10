@extends('admin.master')

@section('title')
    Admin :: Home
@endsection


@section('path')
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>


    <!-- /.col-lg-12 -->
@endsection

@section('content')


    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr class="bg-danger">
                            <td class="text-danger"><h4><b>Role</b></h4></td>
                            <td width="50%"></td>
                            <td ></td>
                            <td class="text-right">
                                <button type="button" class="btn btn-info" style="margin-left: 5px;"><i class="glyphicon glyphicon-print"> </i> </button>
                                <button class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Add New Role</button>
                            </td>
                        </tr>
                        <tr class="bg-primary">
                            <th>#</th>
                            <th>Roll Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        {{--@php($i=1)--}}
                        {{--@foreach($categories as $category)--}}
                            <tr>
                                <td>#</td>
                                <td>Roll Name</td>
                                <td class="blo">Status</td>
                                <td>
                                    <a href="" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-eye-open"></span>
                                    </a>
                                    <a href="" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                    <a href="" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        {{--@endforeach--}}
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
