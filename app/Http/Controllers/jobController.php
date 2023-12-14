<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\enewjobs;

class jobController extends Controller
{
    public function deletejob(Request $request, $id){
        
        $job=enewjobs::find($id);
        $result=$job->delete();
        
        return redirect()->back();
        
        
    }
  public function csvjob(){
        
    }
}
