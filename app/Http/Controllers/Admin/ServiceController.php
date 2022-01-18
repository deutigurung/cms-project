<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('backend.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.services.create');
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
            'title' => 'required|string|max:255|unique:services',
            'description' => 'nullable|string',
            'image'           => 'required|mimes:jpg,jpeg,png|max:2060',
        ]);
        //dd($request->all());
        $service = Service::create([
            'title'      => $request->get('title'),
            'description'      => $request->get('description'),
            'status'      => 1,
        ]);
        if ($request->hasFile('image')) {
            $file        = $request->file('image');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/services';
            $file_name   = 'service-pic-' . $service->id . '.' . $extension;
            $file->move($destination, $file_name);
            Service::where('id', $service->id)->update(['image' => $file_name ]);
        }
        return redirect()->route('services.index')->with('success', 'Service Added Successfully');
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
        $service = Service::find($id);
        return view('backend.services.edit',compact('service'));
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
            'title' => 'required|string|max:255|unique:services,title,'.$id,
            'description' => 'nullable|string',
            'image'           => 'nullable|mimes:jpg,jpeg,png|max:2060',
        ]);

        $service = Service::find($id);
        $service->update([
            'title'      => $request->get('title'),
            'description'      => $request->get('description'),
            'status'      => $request->get('status'),
        ]);
        if ($request->hasFile('image')) {
            $file        = $request->file('image');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/services';
            $file_name   = 'service-pic-' . $service->id . '.' . $extension;
            $file->move($destination, $file_name);
            Service::where('id', $service->id)->update(['image' => $file_name]);
        }
        return redirect()->route('services.index')->with('success', 'Service Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service Deleted Successfully');
    }
}
