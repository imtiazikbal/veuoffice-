<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    function index()
    {
        $categories = Category::all();
        return Inertia::render('Category/Index',['categories' => $categories]);
    }

    function create()
    {
        return Inertia::render('Category/Create');
    }
    function store(Request $request){
        $validate = $request->validate([
            'cName' => 'required',
        ]);
        Category::create($validate);
        return Redirect::route('categories.index')->with('success', 'Category created successfully');
        //return to_route('categories.index')->with('success', 'Category created successfully');
    }
     function edit(Category $category)
    {
        return Inertia::render('Category/Edit', ['category' => $category]);
    }
    function update(Request $request, Category $category){
        $validate = $request->validate([
            'cName' => 'required',
        ]);
        $category->update($validate);
        return to_route('categories.index');
    }
    function destroy(Category $category){
        $category->delete();
        return to_route('categories.index')->with('warning', 'Category Deleted successfully');;
    }
}
