<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Notification\Constant\EmailTypes;
use App\Services\Notification\Notification;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    /**
     *  Show send email form
     */

    public function email()
    {
        $users = User::all();
        $emailTypes = EmailTypes::toString();
        return view('notifications.send-email',compact('users','emailTypes'));
    }


    public function sendEmail(Request $request)
    {
        $request->validate([
           'user' => 'integer | exists:users,id',
           'email_type' => 'integer'
        ]);

        try {
            $notofication = resolve(Notification::class);
            $mailable = EmailTypes::toMail($request->email_type);
            $notofication->sendEmail(User::find($request->user),new $mailable);

            return redirect()->back()->with('success', __('notification.email_sent_successfully'));
        }catch (\Throwable $th){
            return  redirect()->back()->with('failed',__('notification.email_has_problem'));
        }
    }
}
