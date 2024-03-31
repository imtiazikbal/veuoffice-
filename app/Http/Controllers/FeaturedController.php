<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Featured;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FeaturedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $featured = Featured::all();
       // return view('backend.featured.index',compact('featured'));
       return Inertia::render('Featured/Index',['featured' => $featured]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // return view('backend.featured.create');
        return Inertia::render('Featured/Create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'featured' => 'required',
        ]);
         Featured::create($validate);
        return Redirect::route('featured.index')->with('success', 'Featured created successfully');
         
       //return redirect()->back()->with('success','Featured created successfully');
        // return response()->json([
        //     'success' => true,
        //     'message' => 'Featured created successfully',
        //     'data'=> $data
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Featured $featured)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Featured $featured)
    {
        return Inertia::render('Featured/Edit',['featured' => $featured]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Featured $featured)
    {
        $validate = $request->validate([
            'featured' => 'required',
        ]);
       $data = $featured->update($validate);
        return Redirect::route('featured.index')->with('success', 'Featured created successfully');
        // return response()->json([
        //     'success' => true,
        //     'message' => 'Featured created successfully',
        //     'data'=> $data
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Featured $featured)
    {
        $featured->delete();
        return Redirect::route('featured.index')->with('warning', 'Featured Deleted successfully');
        
    }
}
