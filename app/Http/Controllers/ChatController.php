<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chats;
use App\Models\Comments;
use Illuminate\Support\Facades\DB;
use App\Models\Profile_pics;
use Session;
class ChatController extends Controller
{
    //
    public function history(Request $request) 
    {
        $output=array();
        $values = [$request->fr_uid, $request->per_uid, $request->per_uid, $request->fr_uid];
//dd($values);
//file_put_contents("datas.txt",json_encode($values));
        $parts =  DB::select('SELECT * FROM chats WHERE status=1 AND(incoming_user_id = ? AND outgoing_user_id = ?) OR (incoming_user_id = ? AND outgoing_user_id = ?) ORDER BY id', $values);
        
        $parts=json_decode(json_encode($parts), true);
        foreach($parts as $row)
        {
            
           if( $row['incoming_user_id'])
           {
            $res=[ 
                'id'    =>   $row['id'],   
                'message'   => $row['message'],
                'img'    => $row['incoming_user_id_img'],
                'type'   => "s",
                
                'Date'   =>date('Y-m-d',strtotime($row['updated_at'])),
                
               ];
            }
            else{
                $res=[ 
                    'id'    =>   $row['id'],   
                    'message'   => $row['message'],
                    'img'    => $row['incoming_user_id_img'],
                    'type'   => "r",
                    
                    'Date'   =>date('Y-m-d',strtotime($row['updated_at'])),
                    
                   ];
            }
            array_push($output, $res);

        } 
        return json_encode($output);
    }
    public function rec(Request $request ,$id) 
    {
        $output=array();
        

        $parts=Chats::where('outgoing_user_id',$id)->get();
        
        $parts=json_decode(json_encode($parts), true);
        return json_encode($parts);
    }
    public function send(Request $request, $id)
    {
        $parts=Chats::where('outgoing_user_id',$id)->get();
        
        $parts=json_decode(json_encode($parts), true);
       
          
            

        
        return json_encode($parts);
        
    }
    
     public function deleteChat(Request $request){
         $result = Comments::find($request->cmt_id);
         $result->delete();
         
         return redirect()->back();
     }
}
