@extends('admin.master')

@section('title')
    Admin :: Home
@endsection


@section('path')
    <div class="col-lg-12">
        <h1 class="page-header">Add Authors</h1>
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
                            <td class="text-danger" width="75%"><h4><b>Role</b></h4></td>

                            <td class="text-right">
                                <button class="btn btn-danger"><i class="glyphicon glyphicon-backward"></i> Cancel </button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <form action="{{ route('add-author') }}" method="POST" class="form-horizontal">
                                    {{ csrf_field() }}
                                    <br/>
                                    <div class="container-fluid">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Author Name </label>
                                                <input type="text" name="name" class="form-control" >
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
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
