<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $techs = Technology::all();

        return view('admin.pages.technology.technology_index', compact('techs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.technology.technology_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'technology' => 'required|string',
            'status' => 'required||string',
        ]);

          Technology::create($validatedData);

        return redirect()->route('admin.technology.index')->with('success', 'Technology added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Technology $technology)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technology $technology)
    {
        $data['technology'] = Technology::find($technology->id);

        return view('admin.pages.technology.technology_update', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Technology $technology)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'technology' => 'required|string|max:255',
            'status' => 'required|in:A,I',
        ]);

        // Update the technology record
        $technology->update($validatedData);

        // Redirect back with a success message
        return redirect()->route('admin.technology.index')->with('success', 'Technology updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technology $technology)
    {

        $technology->delete();
        
        return redirect()->route('admin.technology.index')->with('success', 'Technology deleted successfully');
    }
}
