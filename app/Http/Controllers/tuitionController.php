<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\srequirement;

class tuitionController extends Controller
{
    public function deletetuition(Request $request, $id){
        $uition=srequirement::find($id);
        $uition->delete();
        
    return redirect()->back();
    }
}
