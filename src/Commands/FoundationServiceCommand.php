<?php

namespace goodjun\FoundationService\Commands;

use Illuminate\Console\Command;

class FoundationServiceCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'foundation:work';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Foundation Queue Work';

    /**
     * FoundationServiceCommand constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Handle
     *
     */
    public function handle()
    {
        echo 'Foundation Service Running!';
    }

}