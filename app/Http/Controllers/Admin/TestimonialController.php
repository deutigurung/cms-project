<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('backend.testimonials.list',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.testimonials.create');
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
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'designation' => 'nullable',
            'image'           => 'nullable|mimes:jpg,jpeg,png|max:2060',
        ]);
        //dd($request->all());
        $testimonial = Testimonial::create([
            'name'      => $request->get('name'),
            'description'      => $request->get('description'),
            'designation'      => $request->get('designation'),
            'status'      => 1,
        ]);
        if ($request->hasFile('image')) {
            $file        = $request->file('image');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/testimonials';
            $file_name   = 'testimonial-pic-' . $testimonial->id . '.' . $extension;
            $file->move($destination, $file_name);
            Testimonial::where('id', $testimonial->id)->update(['image' => $file_name ]);
        }
        return redirect()->route('testimonials.index')->with('success', 'Testimonials  Added Successfully');
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
        $testimonial = Testimonial::find($id);
        return view('backend.testimonials.edit',compact('testimonial'));
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
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'designation' => 'required',
            'image'           => 'nullable|mimes:jpg,jpeg,png|max:2060',
        ]);

        $testimonial = Testimonial::find($id);
        $testimonial->update([
            'name'      => $request->get('name'),
            'description'      => $request->get('description'),
            'designation'      => $request->get('designation'),
            'status'      => $request->get('status'),
        ]);
        if ($request->hasFile('image')) {
            $file        = $request->file('image');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/testimonials';
            $file_name   = 'testimonial-pic-' . $testimonial->id . '.' . $extension;
            $file->move($destination, $file_name);
            Testimonial::where('id', $testimonial->id)->update(['image' => $file_name]);
        }
        return redirect()->route('testimonials.index')->with('success', 'Testimonial Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success', 'Testimonial Deleted Successfully');
    }
}
