<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = TeamMember::all();
<<<<<<< HEAD
<<<<<<< HEAD
        return view('backend.teams.list',compact('teams'));
=======
        return view('backend.teams.index',compact('teams'));
>>>>>>> fa582ccc30c5c5f275c37646d78258783be695f4
=======
        return view('backend.teams.index',compact('teams'));
>>>>>>> 87e4c50425f5e31ccb0cc61cade9d906597c20dd
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.teams.create');
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
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'designation' => 'required',
            'photo'           => 'nullable|mimes:jpg,jpeg,png|max:2060',
        ]);
        //dd($request->all());
        $team = TeamMember::create([
            'title'      => $request->get('title'),
            'description'      => $request->get('description'),
            'designation'      => $request->get('designation'),
<<<<<<< HEAD
<<<<<<< HEAD
=======
            'email'      => $request->get('email'),
            'phone'      => $request->get('phone'),
            'address'      => $request->get('address'),
>>>>>>> fa582ccc30c5c5f275c37646d78258783be695f4
=======
            'email'      => $request->get('email'),
            'phone'      => $request->get('phone'),
            'address'      => $request->get('address'),
>>>>>>> 87e4c50425f5e31ccb0cc61cade9d906597c20dd
            'status'      => 1,
        ]);
        if ($request->hasFile('photo')) {
            $file        = $request->file('photo');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/teams';
            $file_name   = 'team-pic-' . $team->id . '.' . $extension;
            $file->move($destination, $file_name);
            TeamMember::where('id', $team->id)->update(['photo' => $file_name ]);
        }
<<<<<<< HEAD
<<<<<<< HEAD
        return redirect()->route('teams.index')->with('success', 'Team  Added Successfully');
=======
        return redirect()->route('contacts.index')->with('success', 'Contact  Added Successfully');
>>>>>>> fa582ccc30c5c5f275c37646d78258783be695f4
=======
        return redirect()->route('contacts.index')->with('success', 'Contact  Added Successfully');
>>>>>>> 87e4c50425f5e31ccb0cc61cade9d906597c20dd
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
        $team = TeamMember::find($id);
        return view('backend.teams.edit',compact('team'));
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
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'designation' => 'required',
            'photo'           => 'nullable|mimes:jpg,jpeg,png|max:2060',
        ]);

        $team = TeamMember::find($id);
        $team->update([
            'title'      => $request->get('title'),
            'description'      => $request->get('description'),
            'designation'      => $request->get('designation'),
            'status'      => $request->get('status'),
<<<<<<< HEAD
<<<<<<< HEAD
=======
            'email'      => $request->get('email'),
            'phone'      => $request->get('phone'),
            'address'      => $request->get('address'),
>>>>>>> fa582ccc30c5c5f275c37646d78258783be695f4
=======
            'email'      => $request->get('email'),
            'phone'      => $request->get('phone'),
            'address'      => $request->get('address'),
>>>>>>> 87e4c50425f5e31ccb0cc61cade9d906597c20dd
        ]);
        if ($request->hasFile('photo')) {
            $file        = $request->file('photo');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/teams';
            $file_name   = 'team-pic-' . $team->id . '.' . $extension;
            $file->move($destination, $file_name);
            TeamMember::where('id', $team->id)->update(['photo' => $file_name]);
        }
<<<<<<< HEAD
<<<<<<< HEAD
        return redirect()->route('teams.index')->with('success', 'Team Updated Successfully');
=======
        return redirect()->route('contacts.index')->with('success', 'Contact Updated Successfully');
>>>>>>> fa582ccc30c5c5f275c37646d78258783be695f4
=======
        return redirect()->route('contacts.index')->with('success', 'Contact Updated Successfully');
>>>>>>> 87e4c50425f5e31ccb0cc61cade9d906597c20dd
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = TeamMember::find($id);
        $team->delete();
<<<<<<< HEAD
<<<<<<< HEAD
        return redirect()->route('teams.index')->with('success', 'Team Deleted Successfully');
=======
        return redirect()->route('contacts.index')->with('success', 'Contact Deleted Successfully');
>>>>>>> fa582ccc30c5c5f275c37646d78258783be695f4
=======
        return redirect()->route('contacts.index')->with('success', 'Contact Deleted Successfully');
>>>>>>> 87e4c50425f5e31ccb0cc61cade9d906597c20dd
    }
}
