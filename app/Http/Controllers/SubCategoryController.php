<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategory = SubCategory::where('status',true)->get();
        return Inertia::render('SubCategory/Index', ['subcategory' => $subcategory]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::where('status',true)->get();
        return Inertia::render('SubCategory/Create', ['category' => $category]);
          
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'sub_category_name' =>'required|max:255',
            'category_id' =>'required',
        ]);
       SubCategory::create($validate);
        return to_route('subCategories.index')->with('success', 'SubCategory created successfully');

        // return response()->json([
        //     'success' => true,
        //     'message' => 'SubCategory created successfully',
        //     'data'=> $data
        // ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $subCategory = SubCategory::where('id','=',$request->subCategory)->with('category')->first();
        //return $subCategory;
        $categories = Category::where('status',true)->get();
        return Inertia::render('SubCategory/Edit', ['subCategory' => $subCategory, 'categories' => $categories]);

       // return view('backend.subcategory.edit',compact('subCategory','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        $validate = $request->validate([
            'sub_category_name' => 'required|max:255',
            'category_id' => 'required',
        ]);
        $subCategory->update($validate);
       // return redirect('/admin/subCategory')->with('success','SubCategory Updated successfully');
       return to_route('subCategories.index')->with('success','SubCategory Updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
       // return redirect()->back()->with('warning','SubCategory Delted successfully');
       return to_route('subCategories.index')->with('warning','SubCategory Deleted successfully');

        // return response()->json([
        //     'success' => true,
        //     'message' => 'SubCategory deleted successfully'
        // ]);


    }
}
