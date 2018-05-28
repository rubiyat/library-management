@extends('admin.master')

@section('title')
    Admin :: Home
@endsection


@section('path')
    <div class="col-lg-12">
        <h1 class="page-header">Book Details</h1>
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
                            <td width="50%" class="text-danger font-weight-bold"><h4><b>Book Details</b></h4></td>
                            <td class="text-right">
                                <a type="button" class="btn btn-primary" style="margin-left: 5px;"><i class="glyphicon glyphicon-print"> </i> </a>
                                <a class="btn btn-primary" href="{{ route('books.index') }}" data-toggle="tooltip" data-placement="bottom" title="Go To Index"><i class="glyphicon glyphicon-backward"></i> Go To Index</a>
                            </td>
                        </tr>
                        <tr class="bg-secondary">
                            <th height="75">{{ $book->name }}</th>
                            <td><img src="{{ asset('/'.$book->image) }}"></td>
                        </tr>
                        <tr class="bg-secondary">
                            <td>{{ $book->isbn }}</td>
                            <td>{{ $book->publisher->name }}</td>
                        </tr>
                        <tr class="bg-secondary">
                            <td>{{ $book->price }}</td>
                            <td>{{ $book->rack_no }}</td>
                        </tr>
                        <tr class="bg-secondary">                            
                            <td class="text-left">
                                {!! $book->is_active ? 
                                '<span class="badge badge-success">active</span>' : '<span class="badge badge-danger">in-active</span>' !!}
                            </td>
                            <td class="text-right">
                                <form method="POST" action="{{ route('books.destroy', ['id' => $book->id]) }}">
                                    <a href="{{ route('books.edit', ['id' => $book->id]) }}" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="bottom" title="Edit">
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
