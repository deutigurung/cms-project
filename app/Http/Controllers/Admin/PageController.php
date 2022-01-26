<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('backend.pages.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.create');
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
            'title' => 'required|string|max:255|unique:pages',
            'url' => 'nullable|string',
            'date' => 'nullable|date',
            'quote' => 'nullable',
            'description' => 'nullable|string',
            'image'           => 'nullable|mimes:jpg,jpeg,png|max:2060',
            'attach_file'     => 'nullable|mimes:pdf,.docx,png|max:2060',
        ]);
        //dd($request->all());
        $page = Page::create([
            'title'      => $request->get('title'),
            'url'      => $request->get('url'),
            'date'      => $request->get('date'),
            'quote'      => $request->get('quote'),
            'description'      => $request->get('description'),
            'status'      => 1,
        ]);
        if ($request->hasFile('attach_file')) {
            $file        = $request->file('attach_file');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/pages/files/';
            $file_name   = 'page-file-' . $page->id . '.' . $extension;
            $file->move($destination, $file_name);
            Page::where('id', $page->id)->update(['attach_file' => $file_name ]);
        }
        if ($request->hasFile('image')) {
            $file        = $request->file('image');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/pages';
            $file_name   = 'page-pic-' . $page->id . '.' . $extension;
            $file->move($destination, $file_name);
            Page::where('id', $page->id)->update(['image' => $file_name ]);
        }
        return redirect()->route('pages.index')->with('success', 'Page Added Successfully');
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
        $page = Page::find($id);
        return view('backend.pages.edit',compact('page'));
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
            'title' => 'required|string|max:255|unique:pages,title,'.$id,
            'url' => 'nullable|string',
            'date' => 'nullable|date',
            'quote' => 'nullable',
            'description' => 'nullable|string',
            'image'           => 'nullable|mimes:jpg,jpeg,png|max:2060',
            'attach_file'     => 'nullable|mimes:pdf,.docx,png|max:2060',
        ]);

        $page = Page::find($id);
        $page->update([
            'title'      => $request->get('title'),
            'url'      => $request->get('url'),
            'date'      => $request->get('date'),
            'quote'      => $request->get('quote'),
            'description'      => $request->get('description'),
            'status'      => $request->get('status'),
        ]);
        if ($request->hasFile('attach_file')) {
            $file        = $request->file('attach_file');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/pages/files/';
            $file_name   = 'page-file-' . $page->id . '.' . $extension;
            $file->move($destination, $file_name);
            Page::where('id', $page->id)->update(['attach_file' => $file_name ]);
        }
        if ($request->hasFile('image')) {
            $file        = $request->file('image');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/pages';
            $file_name   = 'page-pic-' . $page->id . '.' . $extension;
            $file->move($destination, $file_name);
            Page::where('id', $page->id)->update(['image' => $file_name]);
        }
        return redirect()->route('pages.index')->with('success', 'Page Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        $page->delete();
        return redirect()->route('pages.index')->with('success', 'Page Deleted Successfully');
    }
}
