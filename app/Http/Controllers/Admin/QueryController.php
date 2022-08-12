<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\QueryForm;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function index()
    {
        $queries = QueryForm::latest()->get();
        return view('backend.query',compact('queries'));
    }

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

}
