<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Google_Client;
use Google_Service_Drive;
use App\Models\SendMail;

class MailController extends Controller
{
    public function sendmail(Request $request){

    $result=SendMail::create($request->all());
    if($request){
$data['title']="Forget Password";
$data['subject']=$request->subject;
$data['body']=$request->body;
$data['userEmail']=$request->usermail;
$email=$request->usermail;
$subject=$request->subject;
Mail::send('mailbox',['data'=>$data], function($message)use($data){
    $message->to($data['userEmail'])->subject($data['body']);
});
return redirect()->back();
    }
    else{
        return "Try Again";
    }

Mail::send('mailbox',['data'=>"niraj"], function($message) use($email){
    $message->to($email)->subject("test");
});

return redirect()->back();

    }


    public function gmailinbox(){
        $client = new \Google_Client();
        $client->setAuthConfig('AIzaSyB4-6KrY2lbbYKiwAYAvnkVficsJuZfHrA');
        $client->addScope(\Google_Service_Gmail::GMAIL_READONLY);
        $service = new \Google_Service_Gmail($client);
        $user = 'me';
        $results = $service->users_messages->listUsersMessages($user, ['q' => 'in:inbox']);
        $messages = $results->getMessages();
        foreach ($messages as $message) {
            $msg = $service->users_messages->get($user, $message->getId());
            $snippet = $msg->getSnippet();
        
        }
        
        return $snippet;
        
        }
        

}
 
