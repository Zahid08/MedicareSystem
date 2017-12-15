
@extends('admin.master')

@section('AdminPanel')
    Facilities
@endsection
@section('content')

    <div class="box box-info">
        <div class="box-header with-border">
            <i class="fa fa-envelope-square" aria-hidden="true"></i>  <h3 class="box-title">Facilities</h3>
        </div>
    </div>

    <div class="box-header with-border">
        <h3 class="box-title">Add New Facilities</h3>
    </div>

    <hr>
    <ul class="nav nav-tabs">
        <li class="active"><a id="home" data-toggle="tab" href="#packagelist"><i class="fa fa-list"></i> <span>Facilities List</span></a></li>
        <li><a id="settings" data-toggle="tab" href="#addpackage">  <i class="fa fa-plus"></i> <span>Add Facilities</span> </a></li>
    </ul>
    <div class="tab-content">
        <div id="packagelist" class=" tab-pane fade in active">
            @include('admin.facilities.includes.facilities-list')

        </div>
        <div id="addpackage" class=" tab-pane fade">
            @include('admin.facilities.includes.add-facilities')

        </div>

    </div>


@endsection
