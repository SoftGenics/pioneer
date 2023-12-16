<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DeleteController extends Controller
{
    public function delete(Request $request, $id)
{
   
    $todelte = User::find($id);
    $todelte -> delete();
  
        return redirect()->back();
    
    
}
}
