@extends('admin.master')

@section('title')
    Admin :: Home
@endsection


@section('path')
    <div class="col-lg-12">
        <h1 class="page-header">Borrow Edit</h1>
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
                            <td class="text-danger" width="75%"><h4><b>Borrow Update</b></h4></td>

                            <td class="text-right">
                                <a class="btn btn-danger" href="{{ route('borrows.index') }}"><i class="glyphicon glyphicon-backward"></i> Cancel </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <form action="{{ route('borrows.update', ['id' => $borrow->id]) }}" method="POST" class="form-horizontal">
                                    {{ csrf_field() }}
                                    <input name="_method" type="hidden" value="PUT">
                                    <br/>
                                    <div class="container-fluid">
                                        <div class="col-md-12">
                                            <div class="form-group {{ $errors->has('member_id') ? ' has-error' : '' }}">
                                                <label>Member Name </label>
                                                <select class="form-control " name="member_id" required>
                                                    <option value="" disabled selected>Select one</option>
                                                    @foreach($members as $member)
                                                    <option value="{{ $member->id }}" {{ old('member_id')==$member->id ? "selected": $borrow->member_id==$member->id ? "selected" : ""  }}>{{ $member->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <br/>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group {{ $errors->has('borrow_date') ? ' has-error' : '' }}">
                                                <label>Borrow Date </label>
                                                <input type="date" name="borrow_date" class="form-control" value="{{$borrow->borrow_date}}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <br/>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group {{ $errors->has('borrow_return_date') ? ' has-error' : '' }}">
                                                <label>Return Date </label>
                                                <input type="date" name="borrow_return_date" class="form-control" value="{{$borrow->borrow_return_date}}" required>
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
