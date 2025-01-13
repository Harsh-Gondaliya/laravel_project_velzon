<?php

namespace App\Http\Controllers;

use App\Models\Designation;

use Illuminate\Http\Request;

class AdminCntroller extends Controller
{
    public function dashboard(){
        return view('admin.pages.dashboard.dashboard');
    }

    public function designation(){

        $designation = Designation::all();
 
        return view('admin.pages.dashboard.designation', compact('designation'));
    }

    public function createDesignation(){
        return view('admin.pages.dashboard.add_designation');
    }

    public function storeDesignation(Request $request){
        $request->validate([
            'designation' => 'required',
            'status' => 'required',
        ]);

        Designation::create($request->all());

        return redirect()->route('admin.designation')->with('success','Designation created successfully');
    }

    public function editDesignation($id){
        $designation = Designation::find($id);

        return view('admin.pages.dashboard.edit_designation', compact('designation'));
    }

    public function updatedDesignation(Request $request, $id){
        $request->validate([
            'designation' => 'required',
            'status' => 'required',
        ]);

        $designation = Designation::find($id);
        $designation->update($request->all());

        return redirect()->route('admin.designation')->with('success','Designation updated successfully');
    }

    public function destroyDesignation($id){
        $designation = Designation::find($id, 'id');
        // dd($designation);   
        $designation->delete();

        return redirect()->route('admin.designation')->with('success','Designation deleted successfully');
    }
}
