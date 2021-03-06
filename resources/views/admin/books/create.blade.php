@extends('admin.master')

@section('title')
    Admin :: Home
@endsection


@section('path')
    <div class="col-lg-12">
        <h1 class="page-header">Create Book</h1>
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
                            <td class="text-danger" width="75%"><h4><b>Add New Book</b></h4></td>

                            <td class="text-right">
                                <a class="btn btn-danger" href="{{ route('books.index') }}"><i class="glyphicon glyphicon-backward"></i> Cancel </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <form action="{{ route('books.index') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <br/>
                                    <div class="container-fluid">
                                        <div class="col-md-12">
                                            <div class="form-group {{ $errors->has('publisher_id') ? ' has-error' : '' }}">
                                                <label>Publisher</label>
                                                <select class="form-control " name="publisher_id">
                                                    <option value="" disabled selected>Select one</option>
                                                    @foreach($publishers as $publisher)
                                                    <option value="{{ $publisher->id }}" {{ old('publisher_id')==$publisher->id ? "selected": ""  }}>{{ $publisher->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                                <label>Book Name </label>
                                                <input type="text" name="name" class="form-control" required value="{{ old('name') }} ">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
                                                <label>Book price </label>
                                                <input type="number" name="price" class="form-control" value="{{ old('price') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group {{ $errors->has('isbn') ? ' has-error' : '' }}">
                                                <label>ISBN no </label>
                                                <input type="text" name="isbn" class="form-control" value="{{ old('isbn') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 {{ $errors->has('image') ? ' has-error' : '' }}">      
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" name="image" accept="image/*"/>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group {{ $errors->has('rack_no') ? ' has-error' : '' }}">
                                                <label>Rack</label>
                                                <select class="form-control " name="rack_no">
                                                    <option value="" disabled selected>Select one</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group {{ $errors->has('is_active') ? ' has-error' : '' }}">
                                                <label class="">Status</label>
                                                <div class="radio">
                                                    <label><input type="radio" name="is_active" value="1" checked /> Active</label>
                                                    <label><input type="radio" name="is_active" value="0"/> In-active</label>
                                                </div>
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
