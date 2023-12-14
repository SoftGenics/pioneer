<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\material;

class Controllermaterial extends Controller
{
    public function ganeratecode(Request $request){
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersNumber = strlen($characters);
        $codeLength = 6;
    
        $code = '';
    
        while (strlen($code) < 6) {
            $position = rand(0, $charactersNumber - 1);
            $character = $characters[$position];
            $code = $code.$character;
        }

        $material=new material();
        $material->name=$request->name;
        $material->sdate=$request->sdate;
        $material->edate=$request->edate;
        $material->dicount=$request->discount;
        $material->code=$request->code;
        $material->category =$request->category;
        $material->status=false;

        $material->save();


        return redirect('Misc/Material'); 
    }
    public function ganeratecodedelete(Request $request, $id)
    {
       
        $todelte = material::find($id);
        $todelte -> delete();
        return redirect('Misc/Material');
    }
  public function ganeratecodeapprove(Request $request, $id){
        $todelte = material::find($id);
        $todelte ->status=true;
        $todelte -> update();
        return redirect('Misc/Material'); 
    }
}
