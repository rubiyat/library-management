@extends('admin.master')

@section('title')
    Admin :: Home
@endsection


@section('path')
    <div class="col-lg-12">
        <h1 class="page-header">Category Edit</h1>
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
                            <td class="text-danger" width="75%"><h4><b>Category Update</b></h4></td>

                            <td class="text-right">
                                <a class="btn btn-danger" href="{{ route('categories.index') }}"><i class="glyphicon glyphicon-backward"></i> Cancel </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <form action="{{ route('categories.update', ['id' => $category->id]) }}" method="POST" class="form-horizontal">
                                    {{ csrf_field() }}
                                    <input name="_method" type="hidden" value="PUT">
                                    <br/>
                                    <div class="container-fluid">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Category Name </label>
                                                <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="">Status</label>
                                                <div class="radio">
                                                    <label><input type="radio" name="is_active" value="1" {{ $category->is_active? "checked" : "" }}/> Active</label>
                                                    <label><input type="radio" name="is_active" value="0" {{ $category->is_active? "" : "checked" }}/> In-active</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <br/>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <button class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Update </button>
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