<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::all();
        return view('backend.faqs.index',compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.faqs.create');
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
            'description' => 'required|string',
        ]);

        $faqs = Faq::create([
            'name'      => $request->get('name'),
            'description'      => $request->get('description'),
        ]);
        return redirect()->route('faqs.index')->with('success', 'Faq Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faqs
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faqs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faqs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faqs = Faq::find($id);
        return view('backend.faqs.edit',compact('faqs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faqs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $faqs = Faq::find($id);
        $faqs->update([
            'name'      => $request->get('name'),
            'description'      => $request->get('description'),
        ]);
        return redirect()->route('faqs.index')->with('success', 'Faq Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faqs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faqs = Faq::find($id);
        $faqs->delete();
        return redirect()->route('faqs.index')->with('success', 'Faq Deleted Successfully');
    }
}
