
@extends('admin.master')

@section('AdminPanel')
    Patient
@endsection
@section('content')

    <div class="box box-info">
        <div class="box-header with-border">
            <i class="fa fa-object-ungroup" aria-hidden="true"></i> <h3 class="box-title">Patient Information</h3>
        </div>
    </div>
    <hr>

    <ul class="nav nav-tabs">
        <li class="active"><a id="home" data-toggle="tab" href="#patientlist"><i class="fa fa-list"></i> <span>Patient List</span></a></li>
        <li><a id="settings" data-toggle="tab" href="#addpatient">  <i class="fa fa-plus"></i> <span>Add Patient</span> </a></li>
        <li><a id="contact" data-toggle="tab" href="#contactc"><i class="fa fa-phone"></i> <span>Contact</span> </a></li>
        <li><a id="contact" data-toggle="tab" href="#feedbacklist"><i class="glyphicon glyphicon-comment"></i> <span>Feedback List</span> </a></li>
    </ul>
    <div class="tab-content">
        <div id="patientlist" class=" tab-pane fade in active">
            @include('admin.patient.includes.patient-list')
        </div>
        <div id="addpatient" class=" tab-pane fade">

            @include('admin.patient.includes.add-patient')
        </div>
        <div id="contactc" class=" tab-pane fade">
            @include('admin.patient.includes.contact')
        </div>

        <div id="feedbacklist" class=" tab-pane fade">
            @include('admin.patient.includes.feedback-about-doctorlist')
        </div>

    </div>

@endsection

