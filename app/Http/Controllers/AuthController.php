<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signup(){
        return view('admin.pages.auth.signup');
    }

    public function signupCheck(AuthRequest $request){
        
        $user = $request->addUser();
    }

    public function signin(){
        return view('admin.pages.auth.signin');
    }

    public function signinCheck(Request $request){

        // dd($request->all());
        $request->validate([
            'name'=> 'required|string',
            // 'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = [
            ['email' => $request->name, 'password' => $request->password],
            ['name' => $request->name, 'password' => $request->password]
        ];

        foreach ($credentials as $credential) {
            if (Auth::guard('admin')->attempt($credential, $request->has('remember'))) {
                return redirect()->route('admin.dashboard')->with('success', 'Successfully logged in');
            }
        }

        // Redirect back on failure
        return redirect()->route('signin')->with('error', 'Invalid login details');
    }

    public function dashboard(){
        return view('admin.pages.dashboard.dashboard');
    }

    public function designation(){
        return view('admin.pages.dashboard.designation');
    }

    public function createDesignation(){
        return view('admin.pages.dashboard.add_designation');
    }

    public function storeDesignation(Request $request){
       dd($request->all()); 
    }
}
