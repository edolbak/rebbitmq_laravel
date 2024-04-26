<?php

namespace App\Console\Commands;

use App\Jobs\RabbitTestJob;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class GogogoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gogogo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        RabbitTestJob::dispatch();
    }
}
