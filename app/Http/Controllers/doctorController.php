<?php

namespace App\Http\Controllers;

use App\Doctors;
use App\DoctorsConsultinghour;
use Illuminate\Http\Request;
use  Image;
use DB;
use PhpParser\Comment\Doc;
use PhpParser\Node\Stmt\Return_;

class doctorController extends Controller
{
    public  function  doctorList(){

        $doctors=Doctors::orderBy('id','desc')->take(15)->get();
        return view('admin.doctor.doctor-content',
        ['doctors'=>$doctors]
        );
    }
    public  function addDoctor(Request $request){
        $imagefile = $request->file('image');
        $imageName = $imagefile->getClientOriginalName();
        $directory= 'Doctor-images/';
        $imageUrl = $directory.$imageName;
        Image::make($imagefile)->save($imageUrl);
        $adddoctor=new Doctors();
        $adddoctor->category=$request->category;
        $adddoctor->doctor_name=$request->doctor_name;
        $adddoctor->symtoms=$request->symtoms;
        $adddoctor->phone_no=$request->phone_no;
        $adddoctor->email_addreess=$request->email_addreess;
        $adddoctor->gender=$request->gender;
        $adddoctor->date_of_birth=$request->date_of_birth;
        $adddoctor->address=$request->address;
        $adddoctor->join_date=$request->join_date;
        $adddoctor->password=$request->password;
        $adddoctor->image=$imageUrl;
        $adddoctor->publication_status=$request->publication_status;
        $adddoctor->save();

      return redirect('/Doctor/Doctorlist');

    }

    public  function unpublishedTextNotice($id){
        $doctorID = Doctors::find($id);
        $doctorID->publication_status= 0;
        $doctorID->save();
        return redirect('/Doctor/Doctorlist')->with('message', 'Notice info unpublished successfully.');

    }

    public  function publishedTextNotice($id){
        $doctorID = Doctors::find($id);
        $doctorID->publication_status= 1;
        $doctorID->save();
        return redirect('/Doctor/Doctorlist')->with('message', 'Notice info unpublished successfully.');

    }


    public  function EditDoctor($id){
        $doctorID = Doctors::find($id);
        return view('admin.doctor.Edit-content',['doctors'=>$doctorID]);
    }

    public function updateDoctor(Request $request){

        $imagefile = $request->file('image');
        $imageName = $imagefile->getClientOriginalName();
        $directory= 'Doctor-images/';
        $imageUrl = $directory.$imageName;
        Image::make($imagefile)->save($imageUrl);

        $adddoctor=new Doctors();
        $adddoctor = Doctors::find($request->id);
        $adddoctor->category=$request->category;
        $adddoctor->doctor_name=$request->doctor_name;
        $adddoctor->phone_no=$request->phone_no;
        $adddoctor->email_addreess=$request->email_addreess;
        $adddoctor->gender=$request->gender;
        $adddoctor->date_of_birth=$request->date_of_birth;
        $adddoctor->address=$request->address;
        $adddoctor->join_date=$request->join_date;
        $adddoctor->image=$imageUrl;
        $adddoctor->publication_status=$request->publication_status;
        $adddoctor->update();


        return redirect('/Doctor/Doctorlist')->with('message', 'Updated successfully.');



    }

    public  function removeDoctor($id){
        $doctorID = Doctors::find($id);
        $doctorID->delete();
        return redirect('/Doctor/Doctorlist')->with('message', 'Delete successfully.');

    }
    public  function consultingHour(){

        $doctors=Doctors::orderBy('id','desc')->get();
        return view('admin.consultingDoctor.consulting-content',['doctors'=>$doctors]);
    }

    public function addConsulting(Request $request){
//$saturday=$request->safrom.'am'.' '.'TO'.' '.$request->sato.'pm';
$sunday=$request->sfrom.'am'.' '.'TO'.' '.$request->sto.'pm';
$monday=$request->mfrom.'am'.' '.'TO'.' '.$request->mto.'pm';
$tuesday=$request->tfrom.'am'.' '.'TO'.' '.$request->tto.'pm';
$wednesday=$request->wfrom.'am'.' '.'TO'.' '.$request->wto.'pm';
$thursday=$request->thfrom.'am'.' '.'TO'.' '.$request->thto.'pm';


        $doctorsTime=new DoctorsConsultinghour();
        $doctorsTime->saturday=$request->safrom.'am'.' '.'TO'.' '.$request->sato.'pm';
        $doctorsTime->sunday=$sunday;
        $doctorsTime->monday=$monday;
        $doctorsTime->tuesday=$tuesday;
        $doctorsTime->wednesday=$wednesday;
        $doctorsTime->thursday=$thursday;
        $doctorsTime->publication_status=$request->publication_status;
        $doctorsTime->doctor_id=$request->doctorname;
        $doctorsTime->save();
        return redirect('/doctor/consulting-hour')->with('message', 'Updated successfully.');
    }


    public function TestConsulting(Request $request){

        $doctorID=$request->doctorid;
//        $Doc = Doctors::find($doctorID);

        $result = DoctorsConsultinghour::where('doctor_id', $doctorID)->first();
       return redirect('/doctor/consulting-hour')->with('data',$result);
    }
}
