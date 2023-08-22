<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use Illuminate\Routing\Redirector;

class LoginController extends Controller
{


    public function show(){
        return view("auth.login");
    }

    public function login(LoginRequest $request){

        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)){
            return redirect()->to('/login')->withErrors('auth.failed');
        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);
        return $this->authenticated($request, $user);
    }

    public function authenticated(Request $request, $user){
        return redirect('/home');
    }

    public function logout(Request $request, Redirector $redirect){

       Auth::logout();

       $request->session()->invalidate();
       $request->session()->regenerateToken();
       return $redirect->to('login');
    }

}
