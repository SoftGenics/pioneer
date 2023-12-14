<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use App\Models\persanalinfo;
use App\Models\Eprofile;
use App\Models\profilejobseekers;


class Usercontroller extends Controller
{
    
    
    
    
   public function  updateuser(Request $request){
 $id=$request->user_id;
 $usertype=User::find($id);
if($usertype->category==1){
$user=Profile::where('user_id',$id)->first();
if(isset($user)){
$user->country=$request->country;
$user->state=$request->state;
$user->city=$request->city;
$user->name=$request->name;
$user->psname=$request->psname;
$user->aera=$request->aera;
$user->city=$request->city;
$user->pincode=$request->pincode;
$user->address=$request->address;
$user->whatappno=$request->whatappno;
$user->gender=$request->gender;
$user->dob=$request->dob;

    $user->update();
      return redirect("Users/Detail/$id");
    
}else{
    
    $user=new Profile();
    $user->user_id=$request->user_id;
    $user->country=$request->country;
$user->state=$request->state;
$user->city=$request->city;
$user->name=$request->name;
$user->psname=$request->psname;
$user->aera=$request->aera;
$user->pincode=$request->pincode;
$user->address=$request->address;
$user->whatappno=$request->whatappno;
$user->gender=$request->gender;
$user->dob=$request->dob;
    
 $user->save();
  return redirect("Users/Detail/$id");
}}
  
else if($usertype->category==2){
  $user=persanalinfo::where('user_id',$id)->first();
if(isset($user)){
$user->country=$request->country;
$user->state=$request->state;
$user->city=$request->city;
$user->f_name=$request->f_name;
$user->l_name=$request->l_name;
$user->area=$request->aera;
$user->pincode=$request->pincode;
$user->address=$request->address;
//$user->whatappno=$request->whatappno;
$user->gender=$request->gender;
$user->dob=$request->dob;

    $user->update();
    return redirect("Users/Detail/$id");
    
}else{
  $user->country=$request->country;
$user->state=$request->state;
$user->city=$request->city;
$user->f_name=$request->f_name;
$user->l_name=$request->l_name;
$user->aera=$request->aera;
$user->pincode=$request->pincode;
$user->address=$request->address;
//$user->whatappno=$request->whatappno;
$user->gender=$request->gender;
$user->dob=$request->dob;
    
 $user->save();
  return redirect("Users/Detail/$id");  
} 
}
else if($usertype->category==3){
    
}
else{
 $user=Eprofile::where('user_id',$id)->first();
if(isset($user)){
$user->country=$request->country;
$user->state=$request->state;
$user->city=$request->city;
$user->name=$request->name;
$user->psname=$request->psname;
$user->aera=$request->aera;
$user->pincode=$request->pincode;
$user->address=$request->address;
$user->whatappno=$request->whatappno;
$user->gender=$request->gender;
$user->dob=$request->dob;

    $user->update();
     return redirect("Users/Detail/$id");
    
}else{
    
    $user=new Eprofile();
    $user->user_id=$request->user_id;
    $user->country=$request->country;
$user->state=$request->state;
$user->city=$request->city;
$user->name=$request->name;
$user->psname=$request->psname;
$user->aera=$request->aera;
$user->pincode=$request->pincode;
$user->address=$request->address;
$user->whatappno=$request->whatappno;
$user->gender=$request->gender;
$user->dob=$request->dob;
    
 $user->save();
  return redirect("Users/Detail/$id");
}   
}
    
      return redirect("Users/Detail/$id");
   }

public function teacher(Request $request){
    
    
        $teacher=User::where(['category'=>2])->get();
  $teachers[]=$teacher;
  foreach($teacher as $teach){
      
      $profile=persanalinfo::where(['user_id'=>'$id'])->get();
      $teachers[]=$profile;
      
  
}
   
  return view('course/Teacherlist', compact('teachers'));
        


}
public function dashboard(Request $request){

if($request->session()->get('token')){
    return view('dashboards/elearning');
}
else{

return view('authentication.login');
}
}

public function user_detail(Request $request,$id){
    
        
     $Userprofile=[];   

    $data=User::find($id);
    $Userprofile['user_id']=$id;
    
    if($data->category==1){
        $Userprofile=Profile::where('user_id',$id)->first();
        
       return view('quiz.StudentEdit',compact('Userprofile'));  
        
    }
   else if($data->category==2){
        $Userprofile=persanalinfo::where('user_id',$id)->first();
     // $Userprofile=Profile::where('user_id',$id);
       return view('quiz.TeacherEdit',compact('Userprofile'));  
        
    } else if($data->category==3){
       // $Userprofile=Profile::where('user_id',$id);
       $Userprofile=Eprofile::where('user_id',$id)->first();
       return view('quiz.EmployerEdit',compact('Userprofile'));  
        
    }
    else{
  $Userprofile=Eprofile::where('user_id',$id)->first();
     
    return view('quiz.JobSheekherEdit',compact('Userprofile'));
    } 


   
}



}
