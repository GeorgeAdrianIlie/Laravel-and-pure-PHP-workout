<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $images = Image::get();
        // select * form images

        return view("images.index", compact("images"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doc = $request->file('path');

        $input = $request->all();
        
        $extension = $doc->getClientOriginalExtension();

        $filename = $input['name'] . '-' . time() . '.'.$extension;

        $doc->move('uploads/', $filename);

        $image = new Image;

        $image->path = $filename;
        $image->name = $input['name'];

        $image->save();

        return redirect()->route('images.index');

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
        $image = Image::find($id);

        return view("images.edit", compact('image'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Image::find($id);
        $path = $image->path;
        $image_path = public_path("/uploads/".$path);

        if(\File::exists($image_path)) {
            \File::delete($image_path);
        }
        $image->delete();

        return redirect()->route("images.index");


    }
}
