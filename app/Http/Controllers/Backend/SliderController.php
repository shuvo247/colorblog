<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allSlider = Slider::orderByDesc('id')->get();
        return view('admin.slider.list',compact('allSlider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
            'slider_image' => 'required|image',
        ]);
        try {
            $slider = new Slider();
                if ($request->hasFile('slider_image')) {
                    $image = $request->file('slider_image');
                    $name = time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/slider/');
                    $image->move($destinationPath, $name);
                    $slider->slider_image = $name;
                }
            $slider->save();
            return redirect()->route('slider.list')->with('message','Slider Added successfully');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $slider = Slider::findOrFail($request->slider_id);
        return view('admin.slider.edit',compact('slider'));
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
            'slider_image' => 'required|image',
        ]);
        try {
            $slider = Slider::findOrFail($request->slider_id);
                if ($request->hasFile('slider_image')) {
                    if(isset($slider->slider_image)){
                        unlink('uploads/slider/'.$slider->slider_image);
                    };
                    $image = $request->file('slider_image');
                    $name = time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/slider/');
                    $image->move($destinationPath, $name);
                    $slider->slider_image = $name;
                }
            $slider->update();
            return redirect()->route('slider.list')->with('message','Slider Added successfully');
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
        $slider = Slider::findOrFail($request->slider_id);
        if(isset($slider->slider_image)){
            unlink('uploads/slider/'.$slider->slider_image);
        }
        $slider->delete();
        return back()->with('message','Successfully Slider Deleted!!');
    }
}
