@extends('admin.master')

@section('title')
    Admin :: Home
@endsection


@section('path')
    <div class="col-lg-12">
        <h1 class="page-header">Borrows</h1>
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
                            <td class="text-danger"><h4><b>Borrows</b></h4></td>
                            <td width="50%" colspan="3"></td>
                            <td class="text-right">
                                <a type="button" class="btn btn-info" style="margin-left: 5px;"><i class="glyphicon glyphicon-print"> </i> </a>
                                <a class="btn btn-primary" href="{{ route('borrows.create') }}" data-toggle="tooltip" data-placement="bottom" title="Add New"><i class="glyphicon glyphicon-plus"></i> Add New Borrow</a>
                            </td>
                        </tr>
                        <tr class="bg-primary">
                            <th>#</th>
                            <th>Borrower Name</th>
                            <th>Borrow Date</th>
                            <th>Return Date</th>
                            <th>Action</th>
                        </tr>

                        @php($i=($borrows->currentPage()-1)*10 + 1 )
                        @foreach($borrows as $borrow)
                            <tr class="bg-secondary">
                                <th>{{ $i++ }}</th>
                                <th>{{ $borrow->member->name }}</th>
                                <th>{{ $borrow->borrow_date }}</th>
                                <th>{{ $borrow->borrow_return_date }}</th>

                                <td>
                                    <form method="POST" action="{{ route('borrows.destroy', ['id' => $borrow->id]) }}">
                                        <a href="{{ route('borrows.show', ['id' => $borrow->id]) }}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="Show">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </a>
                                        <a href="{{ route('borrows.edit', ['id' => $borrow->id]) }}" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="bottom" title="Edit">
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
                    <div class="text-center">{{ $borrows->links() }}</div>
                    @include('admin.includes.errors')
                </div>
            </div>
        </div>
    </div>
@endsection
