<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class patientController extends Controller
{
    public  function patientlist(){
        return view('admin.patient.patient-content');
    }
    public  function  feedbacklist(){
        return view('admin.patient.read');
    }

    public  function editpatient(){
        return view('admin.patient.edit-patient');
    }
}
