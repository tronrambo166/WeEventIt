<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Events;
use App\Models\User;
use App\Models\Cart;
use App\Models\Savelist;
use Session; 
use Hash;


class PagesController extends Controller
{
    //

    public function home(){       
         return  view('home');
    	
    }


public function getAddress($search){
// Read the JSON file
$json = file_get_contents("js/airports.json");
  
// Decode the JSON file
$array = json_decode($json, true);
// Display data
$results=array();$i=0;
foreach ($array as $loc) {

    if(strtolower($loc['name']) == $search || strtolower($loc['city']) == $search || strtolower($loc['country']) == $search) {
    $results[$i]['name']  = $loc['name'];
    $results[$i]['city']  = $loc['city'];
    $results[$i]['country']  = $loc['country'];$i++;
}

   else if(str_contains(strtolower($loc['name']), $search) || str_contains(strtolower($loc['city']), $search) || str_contains(strtolower($loc['country']), $search)) {
    $results[$i]['name']  = $loc['name'];
    $results[$i]['city']  = $loc['city'];
    $results[$i]['country']  = $loc['country'];$i++;
}
}
return response()->json(['data'=>$results]);
        
    }


public function search(Request $request){
$names = explode(',', $request->search);
$name = $names[0];
$city = $names[1];
$country = $names[2];

$events = Events::where('name', 'like', '%'.$name.'%')
->orWhere('name', 'like', '%'.$city.'%')->
orWhere('address', 'like', '%'.$city.'%')->get();

return view('events',compact('events'));

}


public function event($id){
$event = Events::where('id',$id)->first();
return view('event',compact('event'));

}

public function booking_request(Request $request){
    return $request->all();
}

public function updateProfile(Request $req, $id){
       
 // if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
     // return redirect()->route('dashboard');} else return redirect()->back();

// use above or below both are okay

        $user_id=$id;
        $old=$req->old_pass;
        $user=DB::table('users')->where('id',$id)->first();
        if(Hash::check($old, $user->password)) {
         
      
         $data['name'] = $req->name;
         $data['email'] = $req->email;
         $data['password'] = password_hash($req->new_pass,PASSWORD_DEFAULT);
        
         User::where('id',$id)->update($data);
         return response()->json(['message' => 'Status Changed!']);
       
    } //else { //return response()->json(['message' => 'Status Changed!']); } 
     
    

    }



//Class closes
}
