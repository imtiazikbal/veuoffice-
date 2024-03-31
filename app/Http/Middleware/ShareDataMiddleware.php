<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\News;
use Inertia\Inertia;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ShareDataMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $headerData = Category::all(); // Fetch header data from the database
        $featuredNews = News::latest()->take(3)->get(); // Fetch header data from the database
      
        // Share header data with Inertia
        Inertia::share([
            'feturedNews' => $featuredNews,
            'headerData' => $headerData,
           
        ]);
        return $next($request);
    }
}