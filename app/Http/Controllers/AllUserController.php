<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\enewjobs;
use App\Models\srequirement;
use Illuminate\Database\Query\Builder;
use App\Models\CandiateModel;
use Illuminate\Support\Facades\DB;
use App\Models\User;



class AllUserController extends Controller
{
   
    
    
     public function index(Request $request)
    {  
    
     // $candidate=User::all();
            $candidate = DB::select( DB::raw("SELECT * FROM profiles JOIN users ON profiles.user_id = users.id ORDER BY profiles.id DESC"));
        $i=0;
               for($i=0;$i<count($candidate);$i++){
            
            $address[$i] = $candidate[$i]->pincode;
            if($address==null){
                $address=800020;
            }}
            
            $result=DB::select(DB::raw("SELECT * FROM googlemaps"));
// $url = "https://maps.googleapis.com/maps/api/geocode/json?address=" . urlencode($address) . "&key=AIzaSyDdi5PRTgJHX2V1MXNY2miatJPRcDPWgz4";

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// $response = curl_exec($ch);
// curl_close($ch);

// $response_a = json_decode($response);

// $lat = $response_a->results[0]->geometry->location->lat;
// $lng = $response_a->results[0]->geometry->location->lng;
// $result = array(
//   'lat' =>25.5941 ,  
//   'lng' => 85.1376,
// ); 

//  const beaches = [
//         ["Bondi Beach", 20.593683, 78.962883],
//          ["Patna", 25.5941, 85.1376],
          
        
//       ];    
                   
            return $result;
    }
    
  
    
  
  
   
  
   
    
    
   
    
}
