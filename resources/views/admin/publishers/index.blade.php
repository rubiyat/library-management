@extends('admin.master')

@section('title')
    Admin :: Home
@endsection


@section('path')
    <div class="col-lg-12">
        <h1 class="page-header">Publishers</h1>
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
                    <table class="table table-bordered">
                        <tr class="bg-danger">
                            <td class="text-danger"><h4><b>Publishers</b></h4></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-right" colspan="2">
                                <a type="button" class="btn btn-info" style="margin-left: 5px;"><i class="glyphicon glyphicon-print"> </i> </a>
                                <a class="btn btn-primary" href="{{ route('publishers.create') }}" data-toggle="tooltip" data-placement="bottom" title="Add New"><i class="glyphicon glyphicon-plus"></i> Add New Publisher</a>
                            </td>
                        </tr>
                        <tr class="bg-primary">
                            <th>#</th>
                            <th>Author Name</th>
                            <th>Author Address</th>
                            <th>Author Phone Number</th>
                            <th>Author Email</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($publishers as $publisher)
                            <tr class="bg-secondary">
                                <td>{{ $i++ }}</td>
                                <td>{{ $publisher->name }}</td>
                                <td>{{ $publisher->address }}</td>
                                <td>{{ $publisher->phone_number }}</td>
                                <td>{{ $publisher->email }}</td>
                                <td>
                                    <form method="POST" action="">
                                        <a href="{{ route('publishers.show', ['id' => $publisher->id]) }}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="Show">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </a>
                                        <a href="" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="bottom" title="Edit">
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
                        @endforeach
                    </table>
                    {{--@include('admin.includes.errors')--}}
                </div>
            </div>
        </div>
    </div>
@endsection
