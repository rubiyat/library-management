@extends('admin.link')

@section('body')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                @yield('path')
            </div>
            <!-- /.col-lg-12 -->
        </div>

        @yield('content')
    </div>
    @endsection