<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    /**
     *  Show send email form
     */

    public function email()
    {
        $users = User::all();
//        dd($users);
        return view('notifications.send-email',compact('users'));
    }
}
