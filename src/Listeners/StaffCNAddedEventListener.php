<?php

namespace goodjun\FoundationService\Listeners;

use goodjun\FoundationService\Events\StaffCNAddedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use goodjun\FoundationService\Converter\PublicConverter;

class StaffCNAddedEventListener
{
    protected $staffsCNPath;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->staffsCNPath = config('foundation.models_namespace').'\StaffsCN';
    }
    /**
     * Handle the event.
     *
     * @param  StaffCNAddedEvent  $event
     * @return void
     */
    public function handle(StaffCNAddedEvent $event)
    {
        $staffData = $event->data['message'];

        $staffsCNModel = new $this->staffsCNPath(PublicConverter::transform('staffs_cn', $staffData));

        $staffsCNModel->save();
    }
}
