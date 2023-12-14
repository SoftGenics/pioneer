<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\srequirement;
use App\Models\enewjobs;

use Session;

class emp_post_job extends Controller
{
    public function addrequirment(Request $request){
    $result= enewjobs::create($request->all());
    if($result)
    {
       
        return redirect()->back();
        }
    else{
       return redirect()->back();
    }
}
  public function Editrequirment(Request $request, $id){
      
      $job=enewjobs::find($id);
    $result= $job->update($request->all());
    if($result)
    {
       
        return redirect()->back();
        }
    else{
       return redirect()->intended('my-notification/error');
    }
}



public function deleterequirement(Request $request, $id){

    $result= srequirement::where('id',$id)->first();
    $delete=$result->delete();
    return redirect()->intended('apostnew');
}
public function job_post(Request $request)
{
    $user=session()->get('users');
    $id=$user['id'];
        $epost = new Epost;
        $epost->user_id = $id;
        $epost->title = $request->title;
        $epost->segment = $request->segment;
        if($request->adr!=null)
        {
            $epost->mode = "offline";
            $epost->address = $request->adr;
        }
        else{
            $epost->mode = "online";
            $epost->address = "work from home";
        }
        
        $epost->type = $request->customRadio;
        $epost->schedule = $request->schedule;
        $epost->no_open = $request->no_open;
        $epost->min_max = implode(',',$request->min_max);
        $epost->other = $request->other;
        $epost->description = $request->description;
        $epost->resume = $request->resume;
        $epost->posted_by = $request->posted_by;
        $epost->status = "0";
        $result=$epost->save();
        
         return redirect('spostnew')->with('statuses', 'Job posted');
}
public function view_post(){
    
    
     $user=session()->get('users');
     if(isset($user)){
    if($user->category==3){
    
    return view('employer/spostnew');
    }
    else{
        
        // return "jhgfhuy";
       return redirect()->intended('my-notification/onlyemployeer');
    }
     }
     else{
           return redirect()->intended('my-notification/onlyemployeer');
     }
}

public function fview_post(){
    
     $user=session()->get('users');
     if(isset($user)){
    if($user->category==4){
    
    return view('employer/spostnew');
    }
    else{
        
        // return "jhgfhuy";
       return redirect()->intended('my-notification/OnlyJobSeekher');
    }
     }
     else{
           return redirect()->intended('my-notification/OnlyJobSeekher');
     }
    
}
public function Eadv(){
     $user=session()->get('users');
     if(isset($user)){
    if($user->category==3){
    
     return view('tutor/adv');
    }
    else{
        
        // return "jhgfhuy";
       return redirect()->intended('my-notification/onlyemployeer');
    }
     }
     else{
           return redirect()->intended('my-notification/onlyemployeer');
     }
   
} 
public function Jadv(){
     $user=session()->get('users');
     if(isset($user)){
    if($user->category==4){
    
     return view('tutor/adv');
    }
    else{
        
        // return "jhgfhuy";
       return redirect()->intended('my-notification/OnlyJobSeekher');
    }
     }
     else{
           return redirect()->intended('my-notification/OnlyJobSeekher');
     }
   
} 
public function Tadv(){
     $user=session()->get('users');
     if(isset($user)){
    if($user->category==2){
    
     return view('tutor/adv');
    }
    else{
        
        // return "jhgfhuy";
       return redirect()->intended('my-notification/onlytutor');
    }
     }
     else{
           return redirect()->intended('my-notification/onlytutor');
     }
}
 

public function tution_post(){
     $user=session()->get('users');
     if(isset($user)){
    if($user->category==1){
    
     return redirect('/sspostnew');
    }
    else{
        
        // return "jhgfhuy";
       return redirect()->intended('my-notification/onlystu');
    }
     }
     else{
           return redirect()->intended('my-notification/onlystu');
     }

}


}