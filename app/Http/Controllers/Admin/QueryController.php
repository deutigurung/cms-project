<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QueryForm;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function index()
    {
        $queries = QueryForm::latest()->get();
        return view('backend.query',compact('queries'));
    }
}
