<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

//class RabbitTestJob implements ShouldQueue
class RabbitTestJob
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $data_queue;
    private $data_queue2;

    /**
     * Create a new job instance.
     */
    public function __construct($data_queue, $data_queue2)
    {
//        $this->onQueue('evd');
        $this->data_queue = $data_queue;
        $this->data_queue2 = $data_queue2;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $time = date('H:i:s');
        // TODO-vardump VAR_DUMP
        var_dump($time,$this->data_queue, $this->data_queue2);

    }
}
