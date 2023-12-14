<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recodes;

class createrecord extends Controller
{
    // 
    public function create(Request $request)
    {

        $data = Recodes::create($request->all());

        if ($data) {
            return redirect('/Dashboards/Record');
        }


    }

    public function view()
    {
        $data = Recodes::all();

        return view('dashboards.record', compact('data'));
    }

    public function delete($id)
    {
        $data = Recodes::find($id);
        if (!is_null($data)) {
            $data->delete();
        }
        return redirect()->back();
    }


    public function edit($id)
    {
        $data = Recodes::find($id);
        return view('update', ['data' => $data]);
    }

    public function update(Request $req)
    {
        $data = Recodes::find($req->id);
        if (isset($data)) {
            $data->name = $req->name;
            $data->task = $req->task;
            $data->date = $req->date;
            $data->save();
        }

        return redirect('/Dashboards/Record');
    }
}