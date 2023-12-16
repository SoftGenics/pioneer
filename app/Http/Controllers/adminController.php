<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\manager;
use Mail;
use App\Models\SendMail;
use RealRashid\SweetAlert\Facades\Alert; 
use Illuminate\Support\Facades\Session;

 
class adminController extends Controller
{
     
    public function login(Request $request){
        $email=$request->email;
        $admin=admin::where('email',$email)->first();
        if(isset($admin)){
            if($request->password==$admin->password){ 
                
                session()->put('admin', $admin);
             
                Alert::success('Congrats', 'You\'ve Successfully logged-in');
                //session()->put('email', $request->email);
                return view('dashboards.elearning');
            }else{
                
                Alert::success('Sorry', 'Email Or Password is worng');
                return view('authentication.login');
            }

    }
    else{
        $data['msg']="Email Or Password";
        $data['code']=0;
        Alert::success('Sorry', 'Email Or Password is worng');
        return view('authentication.login',compact('data'));   
        
    }

}

    public function index(){


        return view('authentication.login');
    }

    public function forget(Request $request){
        $email=$request->email;
        $result=Admin::where('email',$email)->first();
        if($result){
    $data['title']="Forget Password";
    $data['subject']="password";
    $data['body']=$result->password;
    $data['userEmail']=$request->email;
    $email=$request->usermail;
    $subject=$request->subject;
    Mail::send('passwordMailbox',['data'=>$data], function($message)use($data){
        $message->to($data['userEmail'])->subject($data['body']);
    });
    return ('authentication.send_otp');
        }
        else{
            return "Try Again";
        }
    }
    
     public function profile(Request $request){
         
        // return "welcome";
       return view('dashboards.change_profile');
    }
    
    public function profileEdit(Request $request){
       
          $id = session()->get('email');
          $img_name = 'img_'.time().'.'.$request->profile->getClientOriginalExtension();
          $request->profile->move(public_path('img/'), $img_name);
          $imagePath = 'img/'.$img_name;
        
         if($id){
            $manager = admin::where('email', $id)->first();
            $manager->profile = $imagePath;
            $manager->update();
            return view('dashboards.change_profile');
         }else{
             return redirect("/");
         }
        
        
         
         
    }
    public function logout(Request $request){
   Session::flush(); 
  
      

        return redirect('/');
    
}
        
}
