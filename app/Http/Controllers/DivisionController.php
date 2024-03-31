<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisions = Division::all();
       // return view('backend.Division.index',compact('division'));
       return Inertia::render('Division/Index',['division' => $divisions]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return view('backend.Division.create');
       return Inertia::render('Division/Create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //div_name
        $validate = $request->validate([
            'div_name' => 'required',
        ]);
       Division::create($validate);
       //return redirect()->back()->with('success','Division created successfully');
       return to_route('divisions.index')->with('success','Division created successfully');


        // return response()->json([
        //     'success' => true,
        //     'message' => 'Division created successfully',
        //     'data'=> $data
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Division $division)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Division $division)
    {
        return Inertia::render('Division/Edit',['division' => $division]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Division $division)
    {
        
        $validate = $request->validate([
            'div_name' => 'required',
        ]);
       $division->update($validate);
       return to_route('divisions.index')->with('success','Division Updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Division $division)
    {
        $division->delete();
        return to_route('divisions.index')->with('warning','Division Deleted successfully');


    }
}
