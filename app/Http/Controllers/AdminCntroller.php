<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCntroller extends Controller
{
    public function dashboard(){
        return view('admin.pages.dashboard.dashboard');
    }
}
