<?php

namespace App\Http\Controllers\Admin;

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
        $sliderData= Slider::all();
        return view('Admin/Manage_slider.index', compact('sliderData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/Manage_slider.create',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_slider = $request->all();
        // p($new_slider);
        $insert = Slider::create($new_slider);
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $insert->addMediaFromRequest('image')->toMediaCollection('image');
        }
        return redirect('admin/slider')->withsuccess('Slider created successfully.....' );
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
    public function edit($id)
    {
        $edit = Slider::find($id);
        return view('Admin/Manage_slider.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $new_slider= $request->all();
        $insert = $request['image'];
        if($request->hasfile('image') && $request->file('image')->isvalid()){
            $slider->media()->delete();
            $slider->addMedia($insert)->toMediaCollection('image');
        }
        $slider->update($new_slider);

        return redirect('admin/slider')->withsuceess('slider edited successfully.....');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->back()->withsuccess('Slider deleted successfully.....' );
    }
}
