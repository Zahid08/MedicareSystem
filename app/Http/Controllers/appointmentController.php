<?php

namespace App\Http\Controllers;
use App\Appointment;
use App\Doctors;
use Illuminate\Http\Request;

class appointmentController extends Controller
{

    public function takeNewToken($id){
        $doctorID =Doctors::find($id);
        return view('fontend.token.token-content');
    }

    public  function Doctorappointment(){

        $doctors=Doctors::orderBy('id','desc')->get();
        return view('admin.appointment.appointment-content',
        ['doctors'=>$doctors]
        );
    }

    public  function  saveAppointment(Request $request){
        $newappointment=new Appointment();
        $newappointment->patientName = $request->patientName;
        $newappointment->PhoneNo= $request->PhoneNo;
        $newappointment->doctorName = $request->doctorName;
        $newappointment->symtoms = $request->symtoms;
        $newappointment->date = $request->date;
        $newappointment->department = $request->department;
        $newappointment->Gender = $request->Gender;
        $newappointment->time = $request->time;
        $newappointment->save();
        return redirect('/Doctor/appointment')->with('message', 'save successfully.');
    }
}
