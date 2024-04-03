<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\News;
use Inertia\Inertia;
use App\Helper\Bengali;
use App\Models\Category;
use App\Models\Featured;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    function lead()
    {
        date_default_timezone_set('Asia/Dhaka');
        $dateNew = date('h:i A - d F Y');
        $date = Bengali::bn_date_time($dateNew); // ১০ জানুয়ারি ২০২৫
        // all category here
        $category = Category::all();

        // Nav bar featured news
        $featured = Featured::where('featured', '=', 'Main')->with('news', fn($q) => $q->where('status', 'published')->latest()->take(3))->first();
        // main featured news 1
        $news = Featured::where('featured', '=', 'Main')->with('news', fn($q) => $q->where('status', 'published')->latest()->take(1))->first();
        // main fetured news skip 1 take 2
        $skip1Get2 = Featured::where('featured', '=', 'Main')->with('news', fn($q) => $q->where('status', 'published')->latest()->skip(1)->take(2))->first();

        return view('fontend.component.leadnews2', compact('category', 'date', 'news', 'skip1Get2', 'featured'));
    }
    function index()
    {
        //date and time here
        date_default_timezone_set('Asia/Dhaka');
        $dateNew = date('j F Y, h:i A');
        $date = Bengali::bn_date_time($dateNew); // ১০ জানুয়ারি ২০২৫
        // all category here

        // Nav bar featured news
        $featured = Featured::where('featured', '=', 'lead_1')->with('news', fn($q) => $q->where('status', 'published')->latest()->take(3))->first();

        // main featured news 1

        $news = News::latest()->take(1)->first();
        $dateString = $news->created_at;

        // Create a DateTime object from the date string
        $date = new DateTime($dateString);

        // Format the date
        $formattedDate = $date->format('j F Y, h:i A');
        $newsContent = [
            'id' => $news->id,
            'title' => $news->title,
            'image' => asset($news->image),
            'nBody' => $news->nBody,
            'nCaption' => $news->nCaption,
            'created_at' => Bengali::bn_date_time($formattedDate),
        ];
        // main fetured news skip 1 take 2
        $newsSkip1Take2 = News::latest()->skip(1)->take(2)->get();
        // Format the date
        $newsSkip3Take3 = News::latest()->skip(3)->take(3)->get();


        //Rajniti Category News
        $newsOfRajnitiCategory = News::where('category_id',1)->with('category', 'division', 'district')->first();

     
        return Inertia::render('Home', ['date' => $date, 'news' => $newsContent, 'newsSkip1Take2' => $newsSkip1Take2, 'featured' => $featured, 'newsSkip3Take3' => $newsSkip3Take3, 'rajnitiCategoryNews' => $newsOfRajnitiCategory]);
     // return $newsOfRajnitiCategory;
    }

    function getNewsByCategory(Request $request, Category $category)
    {
        $news = News::where('category_id', $request->category_id)
            ->with('category', 'division', 'district')
            ->get();
        return Inertia::render('CategoryNews', ['news' => $news]);
    }

//News by title


    function getNewsByTitle(Request $request)
    {
  
        $news= News::where('id', $request->news)->with('category', 'division', 'district')->first();

        $categoryId = $news->category_id;
        $relatedNews = Category::where('id', $categoryId)->with('news', fn($q) => $q->where('status', 'published')->latest()->take(3))->first();

        // $relatedNews = News::where('category_id', $news->category_id)->with('category', 'division', 'district')->limit(3)->get();
        
     return Inertia::render('Details', ['news' => $news, 'relatedNews' => $relatedNews]);
     //return $relatedNews; 
       // return $news;
    }
    function featuredNews()
    {
        $leadNews_1 = Featured::where('featured', '=', 'lead_1')->with('news', fn($q) => $q->where('status', 'published')->latest()->take(1))->first();
        return Inertia::render('Home', ['leadNews_1' => $leadNews_1]);
    }
}
