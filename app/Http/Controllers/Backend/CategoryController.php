<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    static function allCategory(){
        return Category::orderBy('id','desc')->get();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allCategory = $this->allCategory();
        return view('admin.category.list',compact('allCategory'));
    }
    // Make Slug Function
    static function make_slug($string) {
        return preg_replace('/\s+/u', '-', trim($string));
    }

    // Make Slug Function
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            'category_name' => 'required',
            'category_slug' => 'nullable',
        ]);
        // Data Store To Database
        try {
            $category = new Category();
            $category->category_name = $request->category_name;
            $category->category_slug = $this->make_slug($request->category_name);
            $category->save();
            return redirect()->route('category.list')->with('message','Successfully Category Added!!');

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
    public function show(Request $request)
    {
        $getCategory = Category::findOrFail($request->category_id);
        return view('admin.category.edit',compact('getCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        // Validation
        $request->validate([
            'category_name' => 'required',
            'category_slug' => 'nullable',
        ]);
        // Data Store To Database
        try {
            $category = Category::findOrFail($request->category_id);
            $category->category_name = $request->category_name;
            $category->category_slug = $this->make_slug($request->category_name);
            $category->save();

            $allCategory = $this->allCategory();
            return redirect()->route('category.list')->with('message','Successfully Category Updated!!');

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
        try {
            $category = Category::findOrFail($request->category_id);
            $category->delete();
            $allCategory = $this->allCategory();
            return back()->with('message','Successfully Category Deleted!!');
        } catch (\Throwable $th) {
            return back()->with('error','Something went wrong...!!');
        }
    }
}
