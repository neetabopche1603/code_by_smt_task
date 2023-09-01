<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    // REGISTER VIEW FUNCTION
    public function userRegister(){
        return view('register');
    }

    // REGISTER STORE FUNCTION
    public function registerPost(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:8',
            'confirm_password' => 'required|same:password',
            'address' => 'required',
            'mobile_number' => 'required|min:10|max:12',
            // unique:users,mobile_number,
        ]);
        try{
            $userRegister = new User();
            $userRegister->name = $request->name;
            $userRegister->mobile_number = $request->mobile_number;
            $userRegister->email = $request->email;
            $userRegister->password = Hash::make($request->password);
            $userRegister->address = $request->address;
             $data = $userRegister->save();
            if( $data){
                return redirect()->route('login')->with('success',"Register Succssfully done.!");
            }else{
                return redirect()->back()->with('error',"Not registerd.");
            }

        }
        catch(Exception $e){
            dd($e->getMessage());
        }
    }


    // LOGIN VIEW FUNCTION
    public function userLogin(){
        return view('login');
    }

      // LOGIN  FUNCTION
   public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        try{
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->intended('dashboard')
              ->with('success','You have Successfully loggedin');
            }
            return redirect("login")->with('error','Oppes! You have entered invalid credentials');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    // LOGOUT FUNCTION
    public function userLogout(){
        Auth::logout();
        return redirect()->route('login');
    }

  
}
