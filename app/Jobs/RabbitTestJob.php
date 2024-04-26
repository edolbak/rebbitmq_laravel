<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class RabbitTestJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
//        $this->user = $user;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
//        echo 'test handled JOB '.__CLASS__.' . LOG Driver===> '.Log::getDefaultDriver().' . Queue: '. $this->queue;
//        echo 'test handle JOB '.__CLASS__.'. for model '. class_basename($this->user).'  . LOG Driver===> '.Log::getDefaultDriver().' . Queue: '. $this->queue;
//        Log::info('test handle JOB '.__CLASS__.'. for model '. class_basename($this->user).'  . LOG Driver===> '.Log::getDefaultDriver().' . Queue: '. $this->queue );

    }
}
