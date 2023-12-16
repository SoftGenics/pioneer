<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ticket;
class helpchatcontroller extends Controller
{
    //
public function userchart(Request $request, $id){
   $data=ticket::where('user_id',$id)->get();
  
return view('apps/chats',compact('data'));
//return $data;
}
}