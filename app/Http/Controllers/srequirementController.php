<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\srequirement;
use App\Models\Epost;

use Session;

class srequirementController extends Controller
{
    public function addrequirment(Request $request){
    $result= srequirement::create($request->all());
    if($result){ return redirect()->back();}
    else{
       return redirect()->back();
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
}