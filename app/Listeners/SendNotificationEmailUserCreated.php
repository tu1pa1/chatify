<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Mail;
use App\Mail\NotificationEmailUserCreated;

class SendNotificationEmailUserCreated
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $user = $event->user;

        Mail::to($user->email)->send(new NotificationEmailUserCreated($user));
    }
}
