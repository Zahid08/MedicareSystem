<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class packageController extends Controller
{
    public  function addpackage(){
        $packageslist = Package::orderBy('id', 'desc')->get();
        return view('admin.package.package-content',
        ['packagelist'=>$packageslist]
        );
    }

    public function addNewPackage(Request $request){
        $packages=new Package();
        $packages->package_name=$request->package_name;
        $packages->package_type=$request->package_type;
        $packages->ammount=$request->ammount;
        $packages->publication_status=$request->publication_status;
        $packages->save();
        return redirect('/package/add-package');
    }

    public  function unpublishedPackage($id){
        $packages = Package::find($id);
        $packages->publication_status= 0;
        $packages->save();
        return redirect('/package/add-package')->with('message', 'package info unpublished successfully.');

    }

    public  function publishedPackage($id){
        $packages = Package::find($id);
        $packages->publication_status= 1;
        $packages->save();
        return redirect('/package/add-package')->with('message', 'package info unpublished successfully.');
    }
    public function editPackage($id){
        $packages = Package::find($id);
        return view('admin.package.edit-package',
            ['packages'=>$packages]
            );
    }

    public function updatedPackage(Request $request){
        $packages=new Package();
        $packages->package_name=$request->package_name;
        $packages->package_type=$request->package_type;
        $packages->ammount=$request->ammount;
        $packages->publication_status=$request->publication_status;
        $packages->save();
        return redirect('/package/add-package');
    }

}
