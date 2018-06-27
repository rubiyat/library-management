@extends('admin.master')

@section('title')
    Admin :: Home
@endsection


@section('path')
    <div class="col-lg-12">
        <h1 class="page-header">Create Author Book</h1>
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
                            <td class="text-danger" width="75%"><h4><b>Add New Author Book</b></h4></td>
                            <td class="text-right">
                                <a class="btn btn-danger" href="{{ route('authorBooks.index') }}"><i class="glyphicon glyphicon-backward"></i> Cancel </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <form action="{{ route('authorBooks.index') }}" method="POST" class="form-horizontal">
                                    {{ csrf_field() }}
                                    <br/>
                                    <div class="container-fluid">
                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('book_id') ? ' has-error' : '' }}">
                                                <label>Book</label>
                                                <select class="form-control" name="book_id" required>
                                                    @foreach($books as $book)
                                                    <option value="{{ $book->id }}">{{ $book->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('author_id') ? ' has-error' : '' }}">
                                                <label>Author</label>
                                                <select class="form-control" name="author_id" required>
                                                    @foreach($authors as $author)
                                                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <br/>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <button class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Save </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @include('admin.includes.errors')
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
