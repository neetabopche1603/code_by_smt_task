<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //dashboard View Function

    public function dashboard(){
        $userLists = User::get();
        return view('dashboard',compact('userLists'));
    }

    // DELETE FUNCTION 
    public function userDelete($id){
        $userDelete = User::find($id)->delete();
        return redirect()->back()->with('delete','User Deleted successfully done.!');
    }
    
}
