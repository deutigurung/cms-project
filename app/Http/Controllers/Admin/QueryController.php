<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use App\Models\Notification;
>>>>>>> fa582ccc30c5c5f275c37646d78258783be695f4
=======
use App\Models\Notification;
>>>>>>> 87e4c50425f5e31ccb0cc61cade9d906597c20dd
use App\Models\QueryForm;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function index()
    {
        $queries = QueryForm::latest()->get();
        return view('backend.query',compact('queries'));
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 87e4c50425f5e31ccb0cc61cade9d906597c20dd

    public function notifications()
    {
        $notifications = Notification::latest()->get();
        return view('backend.notifications',compact('notifications'));
    }

    public function markAsRead(Request $request)
    {
        $notify_id = $request->get('notify_id');
        $data = Notification::find($notify_id);
        $data->mark_read = 1;
        $data->save();
        return redirect()->back();
    }

<<<<<<< HEAD
>>>>>>> fa582ccc30c5c5f275c37646d78258783be695f4
=======
>>>>>>> 87e4c50425f5e31ccb0cc61cade9d906597c20dd
}
