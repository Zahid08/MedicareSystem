
@extends('admin.master')

@section('AdminPanel')
    AdminPanel
@endsection
@section('content')

    <div class="box box-info">
        <div class="box-header with-border">
            <i class="fa fa-envelope-square" aria-hidden="true"></i>  <h3 class="box-title">Notice</h3>
        </div>
    </div>

    <div class="box-header with-border">
        <h3 class="box-title">
            @yield('n')

        </h3>
    </div>

    <hr>
    <ul class="nav nav-tabs">
        <li class="active"><a id="home" data-toggle="tab" href="#packagelist"><i class="fa fa-list"></i> <span>Notice List</span></a></li>
        <li><a id="settings" data-toggle="tab" href="#addpackage">  <i class="fa fa-plus"></i> <span>Add Notice</span> </a></li>
    </ul>
    <div class="tab-content">
        <div id="packagelist" class=" tab-pane fade in active">
            @include('admin.frontNotice.includes.notice-list')
        </div>
        <div id="addpackage" class=" tab-pane fade">

            @include('admin.frontNotice.includes.add-notice')
        </div>

    </div>



@endsection
