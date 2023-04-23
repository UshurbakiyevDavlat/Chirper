<?php

namespace App\Listeners;

use App\Events\ChirpCreated;
use App\Models\User;
use App\Notifications\NewChirp;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendChirpCreatedNotifications implements ShouldQueue
{
    /**
     * Handle the event.
     * TODO In a production application you should add the ability for your users to unsubscribe from notifications like these.
     */
    public function handle(ChirpCreated $event): void
    {
        foreach (User::whereNot('id', $event->chirp->user_id)->cursor() as $user) { // used a database cursor to avoid loading every user into memory at once.
            $user->notify(new NewChirp($event->chirp));
        }
    }
}
