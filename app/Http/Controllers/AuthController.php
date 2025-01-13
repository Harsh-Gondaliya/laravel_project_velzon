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

        if($user){
            return redirect()->route('signup')->with('success', 'User created successfully');
        } else {
            return redirect()->route('signup')->with('error', 'User creation failed');
        }
    }

    public function signin(){
        return view('admin.pages.auth.signin');
    }

    public function signinCheck(Request $request){

        $request->validate([
            'name'=> 'required|string',
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

    public function signout(){
        Auth::guard('admin')->logout();
        return redirect()->route('signin')->with('success','Successfully logged out');
    }
}
