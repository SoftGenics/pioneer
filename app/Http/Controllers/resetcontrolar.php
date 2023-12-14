<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\manager;
use Mail;
use RealRashid\SweetAlert\Facades\Alert;

class resetcontrolar extends Controller
{
    //
    public function resetview(Request $request)
    {
        $validate = $request->validate([
            'email' => ['required', 'min:15']
        ]);

        $data['title'] = "Forget Password";
        $data['subject'] = "OTP";
        $data['body'] = rand(100000, 999999);
        $data['userEmail'] = $request->email;
        $result = Mail::send('mailbox', ['data' => $data], function ($message) use ($data) {
            $message->to($data['userEmail'])->subject($data['body']);
        });

        Session()->put('otp', $data['body']);
        session()->put('email', $data['userEmail']);
        return view('authentication.send_otp');
    }


    public function conform(Request $request)
    {
        $otp = Session()->get('otp');
        $user_otp = $request->otp;
        if ($otp == $user_otp) {
            return view('authentication.conform_pass');
        }
        return view('authentication.send_otp');

    }

    public function success(Request $request)
    {
        $pass = $request->password;
        $new_pass = $request->con_password;
        $email = Session()->get('email');
        $data = manager::where('email', $email)->first();
        if (isset($data)) {
            if ($pass == $new_pass) {
                $data->password = $pass;
                $data->update();
                return redirect("/Dashboards/Elearning");
            }
            ;
        }
        return 'your passwor is not reset';
    }
}