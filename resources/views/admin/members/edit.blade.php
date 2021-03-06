@extends('admin.master')

@section('title')
    Admin :: Home
@endsection


@section('path')
    <div class="col-lg-12">
        <h1 class="page-header">Member Edit</h1>
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
                            <td class="text-danger" width="75%"><h4><b>Member Update</b></h4></td>

                            <td class="text-right">
                                <a class="btn btn-danger" href="{{ route('members.index') }}"><i class="glyphicon glyphicon-backward"></i> Cancel </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <form action="{{ route('members.update', ['id'=>$member->id]) }}" method="POST" class="form-horizontal">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <br/>
                                    <div class="container-fluid">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Member Name </label>
                                                <input type="text" name="name" class="form-control" value="{{ $member->name }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea name="address" class="form-control">{{ $member->address }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" name="phone_number" class="form-control" value="{{ $member->phone_number }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control" value="{{ $member->email }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input type="date" name="date_of_birth" class="form-control" value="{{ $member->date_of_birth }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <div class="col-md-12 radio form-control">
                                                    <label><input type="radio" checked name="gender" value="0">Male</label>
                                                    <label><input type="radio" name="gender" value="1" @if($member->gender == 1) {{ "checked" }} @endif >Female</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Membership Fees</label>
                                                <input type="number" name="membership_fees" class="form-control" value="{{ $member->membership_fees }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Occupation</label>
                                                <input type="text" name="occupation" class="form-control" value="{{ $member->occupation }}" required>
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
