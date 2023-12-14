<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manager;
use Mail;
use RealRashid\SweetAlert\Facades\Alert; 
               

class ManagerController extends Controller
{
    public function createAcc(Request $request){
        
        
                
$team=manager::where('email', $request->email)->first();
if($team){
    
      
   Alert::error('Sorry', 'Email is exist'); 
     return view('apps/manager');
      
}
else{
  $result=  manager::create($request->all());
      Alert::success('Congrats', 'You\'ve Successfully Added New Team');
       if($result){
        $email=$request->email;
        $data['userEmail']=$request->email;
        $data['subject']="Team Login ";
$data['password']=$request->password;
$data['body']="please click here to set new password";
$data['token']="fkjsd";


        Mail::send('mailbox', ['data'=>$data], function($message)use($data){
          $message->to($data['userEmail'])->subject($data['body']);
      });
        
      }
        return view('apps/manager');
}
     
    
      }
      public function delete(Request $request, $id){
            $team=manager::find($id);

            $team->delete();
$data="Team is Deleted";
return redirect('Chats/manager');



      }
      public function Edit(Request $request, $id){
            $team=manager::find($id);

            $team->update();
            return redirect('Chats/manager');
      }
      
    public function editform(Request $request, $id){
        $team=manager::find($id);
        $data=$team;
    return view("apps.Edit_team",compact('data'));    
    }
      
      
     public function update(Request $request, $id){
         
          $team=manager::find($id);
          
          $team->update($request->all());
          $data=$team;
          
      return view("apps.Edit_team",compact('data'));  
     }
        
      
}
