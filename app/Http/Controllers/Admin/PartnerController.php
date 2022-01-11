<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partners;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partners::all();
        return view('backend.partners.index',compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.partners.create');
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
            'title' => 'required|string|max:255|unique:partners',
            'url' => 'nullable|string',
            'image'           => 'nullable|mimes:jpg,jpeg,png|max:2060',
        ]);
        //dd($request->all());
        $partner = Partners::create([
            'title'      => $request->get('title'),
            'url'      => $request->get('url')
        ]);
        if ($request->hasFile('image')) {
            $file        = $request->file('image');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/partners';
            $file_name   = 'partner-pic-' . $partner->id . '.' . $extension;
            $file->move($destination, $file_name);
            Partners::where('id', $partner->id)->update(['image' => $file_name ]);
        }
        return redirect()->route('partners.index')->with('success', 'Partner Added Successfully');
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
        $partner = Partners::find($id);
        return view('backend.partners.edit',compact('partner'));
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
            'title' => 'required|string|max:255|unique:partners,title,'.$id,
            'url' => 'nullable|string',
            'image'           => 'nullable|mimes:jpg,jpeg,png|max:2060',
        ]);

        $partner = Partners::find($id);
        $partner->update([
            'title'      => $request->get('title'),
            'url'      => $request->get('url'),
        ]);
        if ($request->hasFile('image')) {
            $file        = $request->file('image');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/partners';
            $file_name   = 'partner-pic-' . $partner->id . '.' . $extension;
            $file->move($destination, $file_name);
            Partners::where('id', $partner->id)->update(['image' => $file_name]);
        }
        return redirect()->route('partners.index')->with('success', 'Partner Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partners::find($id);
        $partner->delete();
        return redirect()->route('partners.index')->with('success', 'Partner Deleted Successfully');
    }
}
