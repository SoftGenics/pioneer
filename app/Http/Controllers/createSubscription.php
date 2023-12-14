<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subscription;

class createSubscription extends Controller
{
    public function create(Request $request){

       $result= subscription::create($request->all());
       return redirect('/Misc/create');
    }
    
    public function display(Request $request){
        $id = $request->id;
        return view('misc/syllabus', compact('id'));
    }
    
    public function edit(Request $request, $id){
        $plan=subscription::find($id);
       
        $plan->zone=$request->zone;
        $plan->plan=$request->plan;
        $plan->price=$request->price;
        $plan->validity=$request->validity;
        $plan->required=$request->required;
        $plan->update();

        return view('misc/player');
      
    }
    public function delete(Request $request, $id){
        $plan=subscription::find($id);
        $plam->delete();

        return redirect('/Misc/Player');
    }

}
