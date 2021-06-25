<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\urlsContoller;

class checkURLstatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:url';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'check url if it  exists and fuctional';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       $staus = new urlsContoller();
       $staus->checkStatus();
       $this->info('done!!');
    }
}
