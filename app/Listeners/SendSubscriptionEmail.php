<?php

namespace App\Listeners;

use App\Events\UserSubscribed;
use Illuminate\Support\Facades\Mail;
use App\Models\Newsletter;
use App\Mail\SubscriptionConfirmation;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendSubscriptionEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        dd('success');
    }

    /**
     * Handle the event.
     */
    public function handle(UserSubscribed $event): void
    {
        Newsletter::create(['email' => $event->email]);
        Mail::to($event->email)->send(new SubscriptionConfirmation());
       
    }
}
