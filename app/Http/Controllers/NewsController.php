<?php

namespace App\Http\Controllers;

use App\Models\News;
use Inertia\Inertia;
use App\Models\Topic;
use App\Models\Upazila;
use App\Models\Category;
use App\Models\District;
use App\Models\Division;
use App\Models\Featured;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if(auth()->user()->role == 'admin'){
            $news = News::with('category','division','district','upazila','user')->where('status','published')->get();
        }else{
            $news = News::with('category','division','district','upazila','user')->where('status','published')->where('user_id',auth()->user()->id)->get();
            
        }
     // return $news;
       //return "ok";
       return Inertia::render('News/Index',['news' => $news]);

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        $subcategory = SubCategory::all();
        $division = Division::all();
        $district = District::all();
        $upazila = Upazila::all();
        $featured = Featured::all();
        $topic = Topic::all();
        
    //    return view('backend.news.create',compact('category','subcategory','division','district','upazila','featured','topic'));
    return Inertia::render('News/Create',['division' => $division,'category' => $category,'subcategory' => $subcategory,'district' => $district,'upazila' => $upazila,'featured' => $featured,'topic' => $topic]);
   
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      // dd($request->all());
    
        $img = $request->file('image');
        $t = time();
        $file_name = $img->getClientOriginalName();
        $img_name = "news-{$t}-{$file_name}";
        $img_url = "uploads/news/{$img_name}";
        // Upload File
        $img->move(public_path('uploads/news'), $img_name);

        $data = News::create([
            'title'=>$request->title,
            'nBody'=>$request->nBody,
            'nCaption'=>$request->nCaption,
            'nTag'=>json_encode($request->nTag),
            'image'=>$img_url,
            'topic_id'=>$request->topic_id,
            'user_id'=>auth()->user()->id,
            'category_id'=>$request->category_id,
            'sub_category_id'=>$request->sub_category_id,
            'featured_id'=>$request->featured_id,
            'division_id'=>$request->division_id,
            'district_id'=>$request->district_id,
            'upazila_id'=>$request->featured_id,
            'status'=>$request->status,
            'scroll'=>$request->scroll
        ]);
        return redirect('/admin/news')->with('success', 'News created successfully');
        // return response()->json([
        //     'success' => true,
        //     'message' => 'News created successfully',
        //     'data'=> $data
        // ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $category = Category::all();
        $subcategory = SubCategory::all();
        $division = Division::all();
        $district = District::all();
        $upazila = Upazila::all();
        $featured = Featured::all();
        $topic = Topic::all();
        return Inertia::render('News/Edit',['division' => $division,'news' => $news,'category' => $category,'subcategory' => $subcategory,'district' => $district,'upazila' => $upazila,'featured' => $featured,'topic' => $topic]);

       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {

        if($request->hasFile('image')){
            $img = $request->file('image');
            $t = time();
            $file_name = $img->getClientOriginalName();
            $img_name = "news-{$t}-{$file_name}";
            $img_url = "uploads/news/{$img_name}";
            // Upload File
            $img->move(public_path('uploads/news'), $img_name);
    
            $news->update([
                'title'=>$request->title,
                'nBody'=>$request->nBody,
                'nCaption'=>$request->nCaption,
                'nTag'=>json_encode($request->nTag),
                'image'=>$img_url,
                'topic_id'=>$request->topic_id,
                'user_id'=>auth()->user()->id,
                'category_id'=>$request->category_id,
                'sub_category_id'=>$request->sub_category_id,
                'featured_id'=>$request->featured_id,
                'division_id'=>$request->division_id,
                'district_id'=>$request->district_id,
                'upazila_id'=>$request->featured_id,
                'status'=>$request->status,
                'scroll'=>$request->scroll
            ]);
            return redirect('/admin/news')->with('success', 'News Updated successfully');
        }else{
            $news->update([
                'title'=>$request->title,
                'nBody'=>$request->nBody,
                'nCaption'=>$request->nCaption,
                'nTag'=>json_encode($request->nTag),
                'topic_id'=>$request->topic_id,
                'user_id'=>auth()->user()->id,
                'category_id'=>$request->category_id,
                'sub_category_id'=>$request->sub_category_id,
                'featured_id'=>$request->featured_id,
                'division_id'=>$request->division_id,
                'district_id'=>$request->district_id,
                'upazila_id'=>$request->featured_id,
                'status'=>$request->status,
                'scroll'=>$request->scroll,
                'image'=>$news->image
            ]);
            return redirect('/admin/news')->with('success', 'News Updated successfully');

        }
       
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news,Request $request)
    {
        File::delete($news->image);
        $news->delete();
        return to_route('news.index')->with('warning', 'News deleted successfully');
    }
}
