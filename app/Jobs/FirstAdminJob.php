<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Log\Logger;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class FirstAdminJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private User $user;

    /**
     * Create a new job instance.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->onQueue('ttt_222');
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Log::info('test handle '.__CLASS__.'. for model '. class_basename($this->user).'  . LOG Driver===> '.Log::getDefaultDriver().' . Queue: '. $this );


//        Log::emergency('emergency LOG');
//        Log::alert('alert LOG');
//        Log::critical('critical LOG');
//        Log::error('error LOG');
//        Log::warning('warning LOG');
//        Log::notice('notice LOG');
//        Log::debug('debug LOG');

//        \logger('test handle logger '.__CLASS__.'. for model '. class_basename($this->user));
//        logs()->info('test handle '.__CLASS__.'. for model '. class_basename($this->user)  );
    }
}
