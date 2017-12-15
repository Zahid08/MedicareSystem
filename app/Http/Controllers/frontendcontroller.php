<?php

namespace App\Http\Controllers;

use App\Doctors;
use App\DoctorsConsultinghour;
use App\Facilities;
use Illuminate\Http\Request;
use  Image;
use DB;
use PhpParser\Comment\Doc;
use PhpParser\Node\Stmt\Return_;


class frontendcontroller extends Controller
{
    public function  index(){
        $facilities = Doctors::orderBy('id', 'desc')->get();
      return view('fontend.Home.home',['facilities'=>$facilities]);
    }
    public function service(){
        return view('fontend.service.service-content');
    }
    public function Doctor(){
        $doctors=Doctors::orderBy('id','desc')->take(15)->get();
        return view('fontend.master',['doctors'=>$doctors]);
    }
    public  function facilities(){

        $facilities = Facilities::where('publication_status', 1)->get();
        //=Facilities::orderBy('id','desc')->get();
        return view('fontend.facilities.facilities-content',
            ['facilities'=>$facilities]
            );
    }
    public function pricing(){
        return view('fontend.pricing.pricing-content');
    }
}
