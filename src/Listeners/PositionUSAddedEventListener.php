<?php

namespace goodjun\FoundationService\Listeners;

use goodjun\FoundationService\Events\PositionUSAddedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use goodjun\FoundationService\Converter\PublicConverter;

class PositionUSAddedEventListener
{
    protected $positionsUSPath;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->positionsUSPath = config('foundation.models_namespace').'\PositionsUS';
    }

    /**
     * Handle the event.
     *
     * @param  PositionUSAddedEvent  $event
     * @return void
     */
    public function handle(PositionUSAddedEvent $event)
    {
        $positionData = $event->data['message'];

        $positionUSModel = new $this->positionsUSPath(PublicConverter::transform('positions_us', $positionData));

        $positionUSModel->save();
    }
}
