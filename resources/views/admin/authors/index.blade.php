@extends('admin.master')

@section('title')
    Admin :: Home
@endsection

@section('css')
    <style type="text/css">
        .dt-buttons .dt-button {
            padding: 5px 15px;
            border-radius: .25rem;
            background: #fb9678;
            color: #fff;
            margin-right: 3px;
        }
        .dt-buttons .dt-button:hover {
            background: #343a40;
        }
    </style>
@endsection


@section('path')
    <div class="col-lg-12">
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
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

                        <thead>
                        <tr class="bg-danger">
                            <td class="text-danger"><h4><b>Authors</b></h4></td>
                            <td width="75%"></td>
                            <td class="text-right">
                                <a class="btn btn-primary" href="{{ route('authors.create') }}" data-toggle="tooltip" data-placement="bottom" title="Add New"><i class="glyphicon glyphicon-plus"></i> Add New Author</a>
                            </td>
                        </tr>
                            <tr class="bg-primary">
                                <th>#</th>
                                <th>Author Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        @php($i= 1 )
                        @foreach($authors as $author)
                            <tr class="bg-secondary">
                                <th>{{ $i++ }}</th>
                                <th>{{ $author->name }}</th>

                                <td>
                                    <form method="POST" action="{{ route('authors.destroy', ['id' => $author->id]) }}">
                                        <a href="{{ route('authors.show', ['id' => $author->id]) }}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="Show">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </a>
                                        <a href="{{ route('authors.edit', ['id' => $author->id]) }}" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="bottom" title="Edit">
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
                        </tbody>
                    </table>
                    @include('admin.includes.errors')
                </div>
            </div>
        </div>
    </div>

    @section('script')
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    </script>
    @endsection
@endsection
