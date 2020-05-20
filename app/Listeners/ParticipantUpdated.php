<?php

namespace App\Listeners;

use App\Events\QuizEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ParticipantUpdated
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
     * @param  QuizEvent  $event
     * @return void
     */
    public function handle(QuizEvent $event)
    {
        //
    }
}
