<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Globleassignment;

class GlobleassController extends Controller
{
    //
    public function save_data(Request $request)
    { $path=null;
        if($request->assingmenet_file){
        $name = $request->file('assingmenet_file')->getClientOriginalName();
        $request->file('assingmenet_file')->move(public_path('img/'), $name);
        $path = 'img/'.$name;
        }
        // return $request;
        $Globleassignment=new Globleassignment();
        
        $Globleassignment->title=$request->title;
        $Globleassignment->assignment=$request->assignment;
        $Globleassignment->date=$request->date;
        $Globleassignment->assingmenet_file=$path;
        $Globleassignment->user_id=$request->user_id;
        $result = $Globleassignment->save();
        if ($result) {
            return redirect('/Dashboards/globle_ass');
        }else{
            return  "data not save yet";
        }
       
    }
    
}