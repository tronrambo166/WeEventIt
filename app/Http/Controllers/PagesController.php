<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Brands;
use App\Models\Categories;
use App\Models\Images;
use App\Models\Orders;
use App\Models\Products;
use App\Models\User;
use App\Models\Cart;
use App\Models\Savelist;
use Session; 
use Hash;


class PagesController extends Controller
{
    //

    public function home(){
           $images=Images::get();
           $product=Products::orderBy('id', 'DESC')->get();
           $newproduct=Products::get();

         return  view('home', compact('product','images','newproduct'));
    	
    }



public function updateProfile(Request $req, $id){
       
 // if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
     // return redirect()->route('dashboard');} else return redirect()->back();

// use abobe or below both are okay

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
