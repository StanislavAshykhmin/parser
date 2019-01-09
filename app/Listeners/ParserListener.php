<?php

namespace App\Listeners;

use App\Events\ParserEvent;
use App\Jobs\ParserJob;

class ParserListener
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
     * @param  object $event
     * @return void
     */
    public function handle(ParserEvent $event)
    {
        ParserJob::dispatch($event->tag)->onQueue('high');
    }
}
