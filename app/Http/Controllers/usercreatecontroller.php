<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use App\Models\persanalinfo;
use App\Models\Eprofile;
use App\Models\profilejobseekers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\RegisterRequest;


class usercreatecontroller extends Controller
{
    
    public function adduser(Request $request){
        $user=User::where('username',$request->username)->first();
        if($user){
            Alert::error('Fail', 'Username allready exist');
       return view('dashboards/createuser'); 
        }
        else{
     $result=  User::create($request->all()); 
     Alert::success('success', 'Account Created Successfully');
       return view('dashboards/createuser'); 
    }
    
}


}
