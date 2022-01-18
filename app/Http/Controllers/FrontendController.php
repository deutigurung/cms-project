<?php

namespace App\Http\Controllers;

use App\Models\QueryForm;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function queryForm(Request $request){
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string',
            'email' => 'nullable|string|email',
            'phone' => 'nullable',
            'message' => 'required',
        ]);
        $query = QueryForm::create([
            'first_name'      => $request->get('first_name'),
            'last_name'      => $request->get('last_name'),
            'message'      => $request->get('message'),
            'phone'      => $request->get('phone'),
            'email'      => $request->get('email'),
        ]);
        return redirect()->back()->with('success', 'Your query has been submit Successfully');

    }
}
