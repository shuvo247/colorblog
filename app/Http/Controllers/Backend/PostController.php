<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Slider;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPost = Post::orderByDesc('id')->get();
        return view('admin.post.list',compact('allPost'));
    }
    // Make Slug Function
    static function make_slug($string) {
        return preg_replace('/\s+/u', '-', trim($string));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allCategory = Category::orderByDesc('id')->get();
        return view('admin.post.create',compact('allCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'post_title' => 'required',
            'category_id' => 'required',
            'post_description' => 'required',
            'post_thumbnail' => 'required',
        ]);
        // Data Store To Database
        try {
            $post = new Post();
            $post->post_title = $request->post_title;
            $post->category_id= $request->category_id;
            $post->post_description = $request->post_description;
            if ($request->hasFile('post_thumbnail')) {
                $image = $request->file('post_thumbnail');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/post/');
                $image->move($destinationPath, $name);
                $post->post_thumbnail = $name;
            }
            $post->post_slug = self::make_slug($request->post_title);
            $post->save();
            return redirect()->route('post.list')->with('message','Successfully Post Added!!');

        } catch (\Throwable $th) {
            return back()->with('error','Something went wrong...!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $post = Post::findOrFail($request->post_id);
        $allCategory = Category::orderByDesc('id')->get();
        return view('admin.post.edit',compact('post','allCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Data Store To Database
        try {
            $post = Post::findOrFail($request->post_id);
            $post->post_title = $request->post_title;
            $post->category_id= $request->category_id;
            $post->post_description = $request->post_description;
            if ($request->hasFile('post_thumbnail')) {
                if(isset($post->post_thumbnail)){
                    unlink('uploads/post/'.$post->post_thumbnail);
                };
                $image = $request->file('post_thumbnail');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/post/');
                $image->move($destinationPath, $name);
                $post->post_thumbnail = $name;
            }
            $post->post_slug = self::make_slug($request->post_title);
            $post->update();
            return redirect()->route('post.list')->with('message','Successfully Post Added!!');

        } catch (\Throwable $th) {
            return back()->with('error','Something went wrong...!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $post = Post::findOrFail($request->post_id);
        if (isset($post->post_thumbnail)){
            unlink('uploads/post/'.$post->post_thumbnail);
        }
        $post->delete();
        return back()->with('message','Successfully Post Deleted!!');
    }
}
