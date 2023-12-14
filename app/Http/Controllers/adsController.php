<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ad;

class adsController extends Controller
{
    //
public function update_ads(Request $request){


   $request->validate([
      'file' => 'required|image|mimes:jpeg,png,jpg,webp|max:3072',
  ]);

  $path = public_path('images/');
  !is_dir($path) &&
      mkdir($path, 0777, true);

  $imageName = time() . '.' . $request->file->extension();
  $request->file->move($path, $imageName);



 $user = new ad;
 
 $user->name=$request->input('name');
 $user->price=$request->input('price');

 $user->usertype=$request->input('usertype');
 
 $user->start_date=$request->input('start_date');
 $user->end_date=$request->input('end_date');
 $user->status=false;
  
 $user->file ="https://team.picruit.com/images/$imageName";

$result=$user->save();
  
     if($result){
      return redirect('Course/Explore');;
     }
     else{
     return "Not inserted data";
     }
  return  "not Success";
  }

 public function delete_ads(Request $request,$id){

    $user =ad::find($id);

    $user->delete();

    return redirect('Course/Explore');

 }
 public function approve_ads(Request $request, $id){

    $user =ad::find($id);
    $user->status=true;
   $result= $user->update();

   if($result){
    return redirect('Course/Explore');
   }
 }


}
