<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Models\Technology;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

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


    public function technology(){
        $data = [];
        $data['technology'] = Technology::all();
        return view('admin.pages.dashboard.technology',$data);
    }

    public function createTechnology(){
        return view('admin.pages.dashboard.add_technology');
    }

    public function storeTechnology(Request $request){
        // dd($request->all());
        $request->validate([
            'technology' => 'required|string',
            'status' => 'required|in:A,I'
        ]);
        Technology::create([
            'technology' => $request->technology,
            'status' => $request->status,
        ]);
        return redirect()->route('technology')->with('success', 'Technology Added Successfully!');


        // return redirect()->route('admin.pages.dashboard.technology')->with('success' , 'Successfully added technology');
    }

    public function updateTechnology($techId){
        $techDetails = Technology::where('id', $techId)->first();
        return view('admin.pages.dashboard.update_technology', compact('techDetails'));
    }

    public function updateTech(Request $request){
        $techId = $request->id;

        $request->validate([
            'technology' => 'required|string',
            'status' => 'required|in:A,I'
        ]);

        $techTypes = Technology::findOrFail($techId);
        $techTypes->update([
            'technology' => $request->technology,
            'status' => $request->status,
        ]);
        return redirect()->route('technology')->with('success', 'Technology Updated Successfully!');

    }

    public function deleteTechnology($techId){
        $techData = Technology::where('id', $techId)->delete();

        if($techData){
            return redirect()->route('technology')->with('success' ,'Successfully deleted data');
        }else{
            return redirect()->route('technology')->with('failed', 'Technology not deleted');
        }
    }

}
