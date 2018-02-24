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
                    <table class="table ">
                        <tr class="bg-danger">
                            <td width="75%"></td>
                            <td class="text-right">
                                <a type="button" class="btn btn-info" style="margin-left: 5px;"><i class="glyphicon glyphicon-print"> </i> </a>
                                <a class="btn btn-danger" href="{{ route('author.index') }}" data-toggle="tooltip" data-placement="bottom" title="Go To Index"><i class="glyphicon glyphicon-backward"></i> Go To Index</a>
                            </td>
                        </tr>
                        <tr class="bg-secondary">
                            <th height="75">{{ $author->name }}</th>
                            <td> </td>

                        </tr>
                        <tr class="bg-secondary">
                            <th></th>
                            <td class="text-right">
                                <a href="" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                <a href="" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
