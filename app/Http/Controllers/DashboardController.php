<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){
        if(auth()->user()->role ==='user'){
            return view('welcome');
        }else{
            $jobsCount = News::where('status','published')->count();
            return view('dashboard',compact('jobsCount'));
        }
       
    }
}
