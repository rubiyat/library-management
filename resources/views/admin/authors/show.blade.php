@extends('admin.master')

@section('title')
    Admin :: Home
@endsection


@section('path')
    <div class="col-lg-12">
        <h1 class="page-header">Author Details</h1>
    </div>


    <!-- /.col-lg-12 -->
@endsection

@section('content')


    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    @include('admin.includes.message')
                    <br/>
                    <table class="table ">
                        <tr class="bg-danger">
                            <td width="75%" class="text-danger font-weight-bold"><h4><b>Author Details</b></h4></td>
                            <td class="text-right">
                                <a type="button" class="btn btn-primary" style="margin-left: 5px;"><i class="glyphicon glyphicon-print"> </i> </a>
                                <a class="btn btn-primary" href="{{ route('authors.index') }}" data-toggle="tooltip" data-placement="bottom" title="Go To Index"><i class="glyphicon glyphicon-backward"></i> Go To Index</a>
                            </td>
                        </tr>
                        <tr class="bg-secondary">
                            <th height="75">{{ $author->name }}</th>
                            <td> </td>

                        </tr>
                        <tr class="bg-secondary">
                            <th class="text-left">
                                <span class="badge badge-success">active</span>
                            </th>
                            <td class="text-right">
                                <form method="POST" action="{{ route('authors.destroy', ['id' => $author->id]) }}">
                                    <a href="{{ route('authors.edit', ['id' => $author->id]) }}" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button  class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
