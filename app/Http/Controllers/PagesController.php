<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showCategoryPostPage(Request $request)
    {
        $getCategory = Category::where('category_slug',$request->category_slug)->first();
        $getPost = Post::where('category_id',$getCategory->id)->orderByDesc('id')->get();
        return view('frontend.pages.category-post',compact('getPost'));
    }
    // Show Single Post
    public  function showSinglePost(Request $request)
    {
        $getSinglePost = Post::where('post_slug',$request->post_slug)->first();
        return view('frontend.pages.single-post',compact('getSinglePost'));
    }
    // Search Post
    public function searchPost(Request $request)
    {
        return $request;
    }
}
