<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    function login() {
        return view('login');
    }

    function loginPost(Request $request) {
       $request->validate(
    [
       // ako nije uneto izadje eror
        'mejl'=> 'required' ,
        'sifra'=>'required' 
    ]);
    $informacije= $request->only(['mejl', 'sifra']);
 
        if (Auth::attempt(['email' => $informacije['mejl'], 'password' => $informacije['sifra']])) {
        // if login true then it will go here
        return redirect()->intended(route('home'));
    }
    return redirect(route('login'))->with("error", "Login failed");
    }

    function registration() {
        return view('registration');
    }


    function registrationPost(Request $request){
        $request->validate(
            [
               // ako nije uneto izadje eror
                'mejl'=> 'required|email|unique:users,email' ,
                'sifra'=>'required' ,
                'ime'=>'required'
            ]);
            $podaci['name']=$request->ime;
            $podaci['email']=$request->mejl;
            $podaci['password']=Hash::make($request->sifra);
            $novi_clan=User::create($podaci);
            if(!$novi_clan){
                return redirect(route('registration'))->with("error", "Registration failed");
 
            }
            return redirect(route('login'))->with("success", "Login sucess");

    }
}