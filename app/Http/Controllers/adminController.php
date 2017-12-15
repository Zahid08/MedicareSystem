<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;
use Image;
class adminController extends Controller
{
    public  function  showProfile(){
        $user=User::orderBy('id','desc')->first();
        $admins=Admin::orderBy('id','desc')->first();
        return view('admin.profile.profile-content',['users'=>$user],
        ['admins'=>$admins]
        );
    }

    public function changeProfile(Request $request){

        $imagefile = $request->file('image');
        $imageName = $imagefile->getClientOriginalName();
        $directory= 'admin_image/';
        $imageUrl = $directory.$imageName;
        Image::make($imagefile)->save($imageUrl);


        $admin=new Admin();
        $user=new User();

        $admin->admin_id=$request->myid;
        $admin->name=$request->name;
        $admin->phoneno=$request->phoneno;
        $admin->email=$request->email;
        $admin->password=$request->password;
        $admin->image=$imageUrl;
        $admin->update();
       return redirect('/userprofile');


    }
}
