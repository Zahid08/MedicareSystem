<?php

namespace App\Http\Controllers;

use App\Message;
use Mail;
use  Session;
use Illuminate\Http\Request;

class mailController extends Controller
{
    public  function mailConfigure(Request $request){

        $message=new Message();
        $message->message=$request->message;
        $message->doctorname=$request->docname;
        $message->email=$request->checkall;
        $message->save();
        $data = $message->toArray();

        Session::put('doctorID', $message->id);
        Session::put('doctorname', $message->doctorname);


        Mail::send('admin.mail.mail-content', $data, function ($newmwssage) use ($data) {
            $newmwssage->to($data['email']);
            $newmwssage->subject('Congratulation Mail');
        });

        return redirect('/Doctor/Doctorlist');
    }
}
