
@extends('admin.master')

@section('AdminPanel')
    AdminPanel
@endsection
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <i class="fa fa-object-ungroup" aria-hidden="true"></i> <h3 class="box-title">Doctors Information</h3>
        </div>
    </div>
    <hr>
            <ul class="nav nav-tabs">
                <li class="active"><a id="home" data-toggle="tab" href="#doclist"><i class="fa fa-list"></i> <span>Doctor List</span></a></li>
                <li><a id="settings" data-toggle="tab" href="#adddoc">  <i class="fa fa-plus"></i> <span>Add Doctor</span> </a></li>
                <li><a id="contact" data-toggle="tab" href="#contactc"><i class="fa fa-phone"></i> <span>Contact</span> </a></li>
                <li><a id="contact" data-toggle="tab" href="#consulting"><i class="fa fa-plus"></i> <span>Add Consulting Hour</span> </a></li>
            </ul>
            <div class="tab-content">
                <div id="doclist" class=" tab-pane fade in active">
                    @include('admin.doctor.includes.doctor-list-content')
                </div>
                <div id="adddoc" class=" tab-pane fade">

                    @include('admin.doctor.includes.add-doctor')
                </div>
                <div id="contactc" class=" tab-pane fade">
                    @include('admin.doctor.includes.contact-doctor')
                </div>

                <div id="consulting" class=" tab-pane fade">
                    @include('admin.doctor.includes.add-consulting-hour')
                </div>

            </div>

@endsection

