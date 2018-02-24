@extends('admin.master')

@section('title')
    Admin :: Home
@endsection


@section('path')
    <div class="col-lg-12">
        <h1 class="page-header">Author</h1>
    </div>


    <!-- /.col-lg-12 -->
@endsection

@section('content')


    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                    <br/>
                    <table class="table table-bordered">
                        <tr class="bg-danger">
                            <td class="text-danger"><h4><b>Author</b></h4></td>
                            <td width="50%"></td>
                            <td class="text-right">
                                <a type="button" class="btn btn-info" style="margin-left: 5px;"><i class="glyphicon glyphicon-print"> </i> </a>
                                <a class="btn btn-primary" href="{{ route('author.create') }}" data-toggle="tooltip" data-placement="bottom" title="Add New"><i class="glyphicon glyphicon-plus"></i> Add New Role</a>
                            </td>
                        </tr>
                        <tr class="bg-primary">
                            <th>#</th>
                            <th>Author Name</th>
                            <th>Action</th>
                        </tr>

                        @php($i=1)
                        @foreach($authors as $author)
                            <tr class="bg-secondary">
                                <th>{{ $i++ }}</th>
                                <th>{{ $author->name }}</th>

                                <td>
                                    <a href="{{ route('author.show', ['id' => $author->id]) }}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="Show">
                                        <span class="glyphicon glyphicon-eye-open"></span>
                                    </a>
                                    <a href="{{ route('author.edit', ['id' => $author->id]) }}" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                    <a href="" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
