<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Upazila;
use App\Models\District;
use Illuminate\Http\Request;

class UpazilaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
    {
        $upazila = Upazila::all();
        //return view('backend.upazila.index',compact('upazila'));
        return Inertia::render('Upazila/Index',['upazila' => $upazila]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $district = District::all();
    // return view('backend.upazila.create',compact('district'));
    return Inertia::render('Upazila/Create',['district' => $district]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'upazila_name' => 'required|max:255',
            'district_id' => 'required',
        ]);
        $data = Upazila::create($validate);
        return to_route('upazilas.index')->with('success','Upazila created successfully');

        //return redirect()->back()->with('success','Upazila created successfully');
        // return response()->json([
        //     'success' => true,
        //     'message' => 'Upazila created successfully',
        //     'data'=> $data
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Upazila $upazila)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Upazila $upazila)
    {
        $district = District::all();
        return Inertia::render('Upazila/Edit',['upazila' => $upazila,'district' => $district]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Upazila $upazila)
    {
        $validate = $request->validate([
            'upazila_name' => 'required|max:255',
            'district_id' => 'required',
        ]);
        $upazila->update($validate);
        return to_route('upazilas.index')->with('success','Upazila Updated successfully');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Upazila $upazila)
    {
        $upazila->delete();
        return to_route('upazilas.index')->with('warning','Upazila Deleted successfully');

    }
}
