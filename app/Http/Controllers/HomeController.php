<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use App\Models\Notification;
>>>>>>> fa582ccc30c5c5f275c37646d78258783be695f4
=======
use App\Models\Notification;
>>>>>>> 87e4c50425f5e31ccb0cc61cade9d906597c20dd
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return view('backend.dashboard');
=======
        $notifications = Notification::where('mark_read',0)->get();
        return view('backend.dashboard',compact('notifications'));
>>>>>>> fa582ccc30c5c5f275c37646d78258783be695f4
=======
        $notifications = Notification::where('mark_read',0)->get();
        return view('backend.dashboard',compact('notifications'));
>>>>>>> 87e4c50425f5e31ccb0cc61cade9d906597c20dd
    }
}
