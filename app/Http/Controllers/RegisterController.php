<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\user;

class RegisterController extends Controller
{
    public function show(){
        return view('auth.register');
    }
    
    
    public function showRegister(RegisterRequest $request){

        $request->validate([
            'username'  => 'required', 
            'email'     => 'required',
            'password'  => 'required',
            'password2' => 'required'
        ]);

        $user = User::create($request -> validated());
        return redirect('login')->with('success','account created successfully');
        
    }

}
