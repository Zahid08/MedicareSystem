
@extends('admin.master')

@section('AdminPanel')
    Package
@endsection
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <i class="fa fa-envelope-square" aria-hidden="true"></i>  <h3 class="box-title">Package</h3>
        </div>
    </div>

        <div class="box-header with-border">
            <h3 class="box-title">Add New Course</h3>
        </div>

    <hr>
    <ul class="nav nav-tabs">
        <li class="active"><a id="home" data-toggle="tab" href="#packagelist"><i class="fa fa-list"></i> <span>Package List</span></a></li>
        <li><a id="settings" data-toggle="tab" href="#addpackage">  <i class="fa fa-plus"></i> <span>Add Package</span> </a></li>
       </ul>
    <div class="tab-content">
        <div id="packagelist" class=" tab-pane fade in active">
            @include('admin.package.includes.package-list')
        </div>
        <div id="addpackage" class=" tab-pane fade">

            @include('admin.package.includes.add-package')
        </div>

    </div>

@endsection

