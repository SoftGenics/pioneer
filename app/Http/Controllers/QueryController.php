<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Query; 
use App\Models\ticket;



class QueryController extends Controller
{
    // //
    // public function create(Request $request){ 
    //     $data = Query::create($request->all());
    //     if ($data) {
    //         return redirect('/Dashboards/query');
    //     }
    // }

    public function show(){
        $data = ticket::all();
        return view('dashboards.query', compact('data'));
       
    }

    public function replayee($id){
        $data = ticket::find($id);
        return view('dashboards.replayee', ['data' => $data]);
    }

    public function update(Request $req)
    {
        $data = ticket::find($req->id); 
       
        if (isset($data)) {
            $data->reply = $req->reply;
            $data->save();
            return redirect('/Dashboards/query');
        }
        return view('dashboards.replayee');
    }

    
}
