<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->get();
        return view('backend.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::latest()->get();
        return view('backend.projects.create',compact('services'));
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
            'title' => 'required|string|max:255|unique:projects',
            'date' => 'nullable|date',
            'website' => 'nullable|string',
            'client' => 'nullable|string',
            'description' => 'nullable|string',
            'service_id' => 'required',
            'image'           => 'required|mimes:jpg,jpeg,png|max:2060',
        ]);
        $project = Project::create([
            'title'      => $request->get('title'),
            'slug'      => Str::slug($request->get('title')),
            'client'      => $request->get('client'),
            'date'      => $request->get('date'),
            'website'      => $request->get('website'),
            'service_id'      => $request->get('service_id'),
            'description'      => $request->get('description'),
            'status'      => 1,
        ]);
        if ($request->hasFile('image')) {
            $file        = $request->file('image');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/projects';
            $file_name   = 'project-pic-' . $project->id . '.' . $extension;
            $file->move($destination, $file_name);
            Project::where('id', $project->id)->update(['image' => $file_name ]);
        }
        return redirect()->route('projects.index')->with('success', 'Project Added Successfully');
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
        $project = Project::find($id);
        $services = Service::latest()->get();
        return view('backend.projects.edit',compact('services','project'));
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
            'title' => 'required|string|max:255|unique:projects,title,'.$id,
            'date' => 'nullable|date',
            'website' => 'nullable|string',
            'client' => 'nullable|string',
            'description' => 'nullable|string',
            'service_id' => 'required',
            'image'           => 'nullable|mimes:jpg,jpeg,png|max:2060',
        ]);
        $project = Project::find($id);
        $project->update([
            'title'      => $request->get('title'),
            'slug'      => Str::slug($request->get('title')),
            'client'      => $request->get('client'),
            'date'      => $request->get('date'),
            'website'      => $request->get('website'),
            'service_id'      => $request->get('service_id'),
            'description'      => $request->get('description'),
            'status'      => $request->get('status'),
        ]);
        if ($request->hasFile('image')) {
            $file        = $request->file('image');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/projects';
            $file_name   = 'project-pic-' . $project->id . '.' . $extension;
            $file->move($destination, $file_name);
            Project::where('id', $project->id)->update(['image' => $file_name ]);
        }
        return redirect()->route('projects.index')->with('success', 'Project Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project Deleted Successfully');
    }
}
