<?php

namespace App\Listeners;

use App\Events\NewUser;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Mail;
use Log;

class EmailUserConfirmation
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewUser  $event
     * @return void
     */
    public function handle(NewUser $event)
    {
        Mail::send('emails.reminder', [], function ($m) use ($event) {
            $m->from('mongen@mongen.io', 'Bienvenido!');
            $m->to($event->usuario->email, $event->usuario->nombre)->subject('Confirme su cuenta!');
        });
    }
}
