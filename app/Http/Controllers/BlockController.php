<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BlockController extends Controller
{
    public function blockUser(Request $request, $id)
    {

        $user= User::find($id);
        $user->status=false;
        $user->update();
        return redirect("Course/Detail/$id");
    }

    public function UnblockUser(Request $request, $id)
    {
         $user= User::find($id);
         $user->status=true;
         $user->update();
        return redirect("Course/Detail/$id"); 
    }
}
