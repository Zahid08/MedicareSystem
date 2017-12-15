<?php

namespace App\Http\Controllers;

use App\Facilities;
use Illuminate\Http\Request;
use  Image;

class frontEndNoticeController extends Controller
{
    public  function noticeControll(Request $request){
        return view('admin.frontNotice.notice-content');
    }

    public  function manageNotice(){
        return view('admin.managenotice.manage-content');
    }

        public  function  facilities(Request $request){

            $facilities=Facilities::orderBy('id','desc')->get();

        return view('admin.facilities.facilities-content',['facilities'=>$facilities]);
    }
    public  function  mangefacilities(){


        return view('admin.manageFacilities.manage-facilities-content');
    }

    public function addNewFacilities(Request $request){

        $imagefile = $request->file('f_image_path');
        $imageName = $imagefile->getClientOriginalName();
        $directory= 'facilities/';
        $imageUrl = $directory.$imageName;
        Image::make($imagefile)->save($imageUrl);

        $facilities=new Facilities();
        $facilities->f_title=$request->f_title;
        $facilities->f_image_path=$imageUrl;
        $facilities->f_description=$request->f_description;
        $facilities->publication_status=$request->publication_status;
        $facilities->save();

        return redirect('/frontend/facilities');


    }



    public  function unpublishedfacilities($id){
        $doctorID = Facilities::find($id);
        $doctorID->publication_status= 0;
        $doctorID->save();
        return redirect('/frontend/facilities')->with('message', 'facilities info unpublished successfully.');

    }

    public  function publishedfacilities($id){
        $doctorID =Facilities::find($id);
        $doctorID->publication_status= 1;
        $doctorID->save();
        return redirect('/frontend/facilities')->with('message', 'facilities info unpublished successfully.');

    }

    public function  removeFacilities($id){
        $facilitiyID = Facilities::find($id);
        $facilitiyID->delete();
        return redirect('/frontend/facilities')->with('message', 'Delete successfully.');
    }

}
