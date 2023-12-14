<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Globleassignment;

class GlobleassController extends Controller
{
    //
    public function save_data(Request $request)
    {
        // return $request;
        $result = Globleassignment::create($request->all());
        if ($result) {
            return redirect('/Dashboards/globle_ass');
        }else{
            return  "data not save yet";
        }
       
    }
}