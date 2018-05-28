@extends('admin.master')

@section('title')
    Admin :: Home
@endsection


@section('path')
    <div class="col-lg-12">
        <h1 class="page-header">Books</h1>
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
                            <td class="text-danger"><h4><b>Books</b></h4></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-right" colspan="2">
                                <a type="button" class="btn btn-info" style="margin-left: 5px;"><i class="glyphicon glyphicon-print"> </i> </a>
                                <a class="btn btn-primary" href="{{ route('books.create') }}" data-toggle="tooltip" data-placement="bottom" title="Add New"><i class="glyphicon glyphicon-plus"></i> Add New Book</a>
                            </td>
                        </tr>
                        <tr class="bg-primary">
                            <th>#</th>
                            <th>Book Name</th>
                            <th>Book Publisher</th>
                            <th>Book Price</th>
                            <th>Book ISBN</th>
                            <th>Book Status</th>
                            <th width="15%">Action</th>
                        </tr>

                        @php($i=($books->currentPage()-1)*10 + 1 )
                        @foreach($books as $book)
                            <tr class="bg-secondary">
                                <td>{{ $i++ }}</td>
                                <td>{{ $book->name }}</td>
                                <td>{{ $book->publisher->name }}</td>
                                <td>{{ $book->price }}</td>
                                <td>{{ $book->isbn }}</td><th>{!! $book->is_active ? 
                                '<span class="badge badge-success">active</span>' : '<span class="badge badge-danger">in-active</span>' !!}</th>
                                <td>
                                    <form method="POST" action="{{ route('books.destroy', ['id' => $book->id]) }}">
                                        <a href="{{ route('books.show', ['id' => $book->id]) }}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="Show">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </a>
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
                        @endforeach
                    </table>
                    <div class="text-center">{{ $books->links() }}</div>
                    @include('admin.includes.errors')
                </div>
            </div>
        </div>
    </div>
@endsection
