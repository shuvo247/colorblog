<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $post = Post::orderByDesc('id')->get();
        $categories = Category::orderByDesc('id')->get();

        return response()->view('sitemap.index', [
            'allPost' => $post,
            'categories' => $categories,
        ])->header('Content-Type', 'text/xml');
    }
    public function post()
    {
        $allPost = Post::latest()->get();
        return response()->view('sitemap.post', [
            'allPost' => $allPost,
        ])->header('Content-Type', 'text/xml');
    }

    public function categories()
    {
        $categories = Category::orderByDesc('id')->get();
        return response()->view('sitemap.category', [
            'categories' => $categories,
        ])->header('Content-Type', 'text/xml');
    }
}
