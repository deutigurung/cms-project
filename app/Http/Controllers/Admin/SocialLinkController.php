<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialLinks;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socials = SocialLinks::all();
        return view('backend.social-links.index',compact('socials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.social-links.create');

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
            'icon' => 'required|string|max:255|unique:social_links',
            'url' => 'nullable|string|max:255|unique:social_links',
        ]);
        //dd($request->all());
        $social = SocialLinks::create([
            'icon'      => $request->get('icon'),
            'url'      => $request->get('url')
        ]);
        return redirect()->route('social-links.index')->with('success', 'SocialLink Added Successfully');
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
        $social = SocialLinks::find($id);
        return view('backend.social-links.edit',compact('social'));
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
            'icon' => 'required|string|max:255|unique:social_links,icon,'.$id,
            'url' => 'nullable|string|max:255|unique:social_links,url,'.$id,
        ]);

        $social = SocialLinks::find($id);
        $social->update([
            'icon'      => $request->get('icon'),
            'url'      => $request->get('url'),
        ]);
        return redirect()->route('social-links.index')->with('success', 'SocialLink Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $social = SocialLinks::find($id);
        $social->delete();
        return redirect()->route('social-links.index')->with('success', 'SocialLink Deleted Successfully');
    }
}
