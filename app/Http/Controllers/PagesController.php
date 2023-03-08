<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Events;
use App\Models\Images;
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

public function all_events(){
$events = Events::latest()->get();
return view('all_events',compact('events'));

}

public function create_event(){
$events = Events::latest()->get();
return view('create_event',compact('events'));

}

public function create_service(){
$events = Events::latest()->get();
return view('create_service',compact('events'));

}

public function save_event(Request $request){
$name = $request->name;
$type = $request->type;
$category = $request->category;
$event_type = $request->event_type;
$isFree = $request->isFree;
$ev_start = $request->ev_start;
$ev_end = $request->ev_end;
$details = $request->details;
$address = $request->address;
if($request->isFree == 'no'){
$per_day = $request->per_day;
$per_hour = $request->per_hour;
}
else $per_day = $per_hour =null;


Events::create([
            'name' => $name,
            'type' => $type,
            'category' => $category,
            'event_type' => $event_type,
            'isFree' => $isFree,
            'ev_start' => $ev_start,
            'ev_end' => $ev_end,
            'details' => $details,
            'per_day' => $per_day,
            'per_hour' => $per_hour
           ]);

          $image=$request->file('posters'); //print_r($image);

          if($image) {
          foreach ($image as $single_img) { 
            # code...
          $uniqid=hexdec(uniqid());
          $ext=strtolower($single_img->getClientOriginalExtension());
          $create_name=$uniqid.'.'.$ext;
          $loc='images/events/';
          //Move uploaded file
          $single_img->move($loc, $create_name);
          $final_img=$loc.$create_name;
           //getting event id
          $ev=Events::orderBy('id', 'DESC')->first();
          $ev_id=($ev->id);

           Images::create([
            'img_name' => $create_name,
            'ev_id' => $ev_id
           ]);

             } }

}

public function save_service(){
$events = Events::latest()->get();
return view('create_event',compact('events'));

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
