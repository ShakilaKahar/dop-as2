<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use App\Notifications\WelcomeEmail;

class SendWelcomeEmail
{
    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $event->user->notify(new WelcomeEmail());
    }
}
