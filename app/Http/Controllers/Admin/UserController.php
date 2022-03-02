<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('id','!=',1)->latest()->get();
        return view('backend.users.list',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
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
            'name' => ['required', 'string', 'max:255'],
            'roles' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image'           => 'nullable|mimes:jpg,jpeg,png|max:2060',

        ]);
        $user = User::create([
            'name'      => $request->get('name'),
            'email'      => $request->get('email'),
            'roles'      => $request->get('roles'),
            'password'   => Hash::make($request->get('password')),

        ]);
        if ($request->hasFile('image')) {
            $file        = $request->file('image');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/users';
            $file_name   = 'user-pic-' . $user->id . '.' . $extension;
            $file->move($destination, $file_name);
            User::where('id', $user->id)->update(['image' => $file_name ]);
        }
        return redirect()->route('users.index')->with('success', 'Users  Added Successfully');
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
        $user = User::find($id);
        return view('backend.users.edit',compact('user'));
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
            'name' => ['required', 'string', 'max:255'],
            'roles' => ['required', 'string', 'max:255'],
            'email'   => 'required|string|email|max:60|unique:users,email,' . $id,
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'image'           => 'nullable|mimes:jpg,jpeg,png|max:2060',
        ]);

        $user = User::find($id);

        if($request->get('password') != null){
            $password =  Hash::make($request->get('password'));
        }else{
            $password = $user->password;
        }
        $user->update([
            'name'      => $request->get('name'),
            'email'      => $request->get('email'),
            'roles'      => $request->get('roles'),
            'password'      => $password,
        ]);
        if ($request->hasFile('image')) {
            $file        = $request->file('image');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/users';
            $file_name   = 'user-pic-' . $user->id . '.' . $extension;
            $file->move($destination, $file_name);
            User::where('id', $user->id)->update(['image' => $file_name]);
        }
        return redirect()->route('users.index')->with('success', 'User Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User Deleted Successfully');
    }
}
