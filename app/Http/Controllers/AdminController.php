<?php

namespace App\Http\Controllers;

use App\Models\MainAssets;
use Inertia\Inertia;
use Illuminate\Http\Request;

class AdminController extends Controller
{
function indexLogo(){
    return Inertia::render('Logo/Index');
}
function createLogo(){
    return Inertia::render('Logo/Create');
}
function storeLogo(Request $request){
// dd($request->all());
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $img = $request->file('image');
    $t = time();
    $file_name = $img->getClientOriginalName();
    $img_name = "sitelogo-{$t}-{$file_name}";
    $img_url = "uploads/news/{$img_name}";
    // Upload File
    $img->move(public_path('uploads/news'), $img_name);
    MainAssets::create([
        'logo'=>$img_url
    ]);
    return to_route('indexLogo')->with('success', 'Logo created successfully');
}
}
