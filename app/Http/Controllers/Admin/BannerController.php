<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        return view('backend.banners.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255|unique:banners',
            'description' => 'nullable|string',
            'url' => 'nullable',
            'image'           => 'required|mimes:jpg,jpeg,png|max:2060',
        ]);
        //dd($request->all());
        $banner = Banner::create([
            'title'      => $request->get('title'),
            'description'      => $request->get('description'),
            'url'      => $request->get('url'),
            'status'      => 1,
        ]);
        if ($request->hasFile('image')) {
            $file        = $request->file('image');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/banners';
            $file_name   = 'banner-pic-' . $banner->id . '.' . $extension;
            $file->move($destination, $file_name);
            Banner::where('id', $banner->id)->update(['image' => $file_name ]);
        }
        return redirect()->route('banners.index')->with('success', 'Banner Added Successfully');
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
        $banner = Banner::find($id);
        return view('backend.banners.edit',compact('banner'));
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
        $validatedData = $request->validate([
            'title' => 'required|string|max:255|unique:banners,title,'.$id,
            'description' => 'nullable|string',
            'url' => 'nullable',
            'image'           => 'nullable|mimes:jpg,jpeg,png|max:2060',
        ]);

        $banner = Banner::find($id);
        $banner->update([
            'title'      => $request->get('title'),
            'description'      => $request->get('description'),
            'url'      => $request->get('url'),
            'status'      => $request->get('status'),
        ]);
        if ($request->hasFile('image')) {
            $file        = $request->file('image');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/banners';
            $file_name   = 'banner-pic-' . $banner->id . '.' . $extension;
            $file->move($destination, $file_name);
            Banner::where('id', $banner->id)->update(['image' => $file_name]);
        }
        return redirect()->route('banners.index')->with('success', 'Banner Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        $banner->delete();
        return redirect()->route('banners.index')->with('success', 'Banner Deleted Successfully');
    }
}
