<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = GalleryImage::all();
        return view('backend.galleries.images.index',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galleries = Gallery::all();
        return view('backend.galleries.images.create',compact('galleries'));
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
            'name' => 'required|string',
            'gallery_id' => 'required',
            'image'           => 'nullable|mimes:jpg,jpeg,png|max:2060',
        ]);
        //dd($request->all());
        $galleryImage = GalleryImage::create([
            'name'      => $request->get('name'),
            'gallery_id'      => $request->get('gallery_id'),
        ]);
        if ($request->hasFile('image')) {
            $file        = $request->file('image');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/images';
            $file_name   = 'image-pic-' . $galleryImage->id . '.' . $extension;
            $file->move($destination, $file_name);
            GalleryImage::where('id', $galleryImage->id)->update(['image' => $file_name ]);
        }
        return redirect()->route('images.index')->with('success', 'GalleryImage Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GalleryImage  $galleryImage
     * @return \Illuminate\Http\Response
     */
    public function show(GalleryImage $galleryImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GalleryImage  $galleryImage
     * @return \Illuminate\Http\Response
     */
    public function edit($galleryImage)
    {
        $galleryImage = GalleryImage::find($galleryImage);
        $galleries = Gallery::all();
        return view('backend.galleries.images.edit',compact('galleryImage','galleries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GalleryImage  $galleryImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'gallery_id' => 'required',
            'image'           => 'nullable|mimes:jpg,jpeg,png|max:2060',
        ]);

        $galleryImage = GalleryImage::find($id);
        $galleryImage->update([
            'name'      => $request->get('name'),
            'gallery_id'      => $request->get('gallery_id'),
        ]);
        if ($request->hasFile('image')) {
            $file        = $request->file('image');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/images';
            $file_name   = 'image-pic-' . $galleryImage->id . '.' . $extension;
            $file->move($destination, $file_name);
            GalleryImage::where('id', $galleryImage->id)->update(['image' => $file_name]);
        }
        return redirect()->route('images.index')->with('success', 'GalleryImage Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GalleryImage  $galleryImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(GalleryImage $galleryImage)
    {
        $galleryImage = GalleryImage::find($galleryImage->id);
        $galleryImage->delete();
        return redirect()->route('images.index')->with('success', 'GalleryImage Deleted Successfully');
    }
}
