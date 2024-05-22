<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class RabbitMQTestJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $data_queue;
    private $data_queue2;

    /**
     * Create a new job instance.
     */
    public function __construct($data)
    {
//        $this->user = $user;
        $this->onQueue('evd');
        $this->data_queue = $data;
        $this->data_queue2 = ['3333333333'=>333333333];
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $time = date('H:i:s');
        // TODO-vardump VAR_DUMP
        var_dump($time,$this->data_queue, $this->data_queue2);


//        $connection = new AMQPStreamConnection(
//            Config::get('queue.connections.rabbitmq.hosts.0.host'),
//            Config::get('queue.connections.rabbitmq.hosts.0.port'),
//            Config::get('queue.connections.rabbitmq.hosts.0.user'),
//            Config::get('queue.connections.rabbitmq.hosts.0.password'),
//            Config::get('queue.connections.rabbitmq.hosts.0.vhost')
//        );
//        $channel = $connection->channel();
//
////        $channel->queue_declare('evd', false, true, false, false);
//
//        $msg = new AMQPMessage(json_encode(['text'=>'Hello World!', 'data'=>$this->data]));
//        $channel->basic_publish($msg, '', 'evd');
//
//        echo " [x] Sent 'Hello World!'\n";
//
//        $channel->close();
//        $connection->close();

//        echo 'test handled JOB '.__CLASS__.' . LOG Driver===> '.Log::getDefaultDriver().' . Queue: '. $this->queue;
//        echo 'test handle JOB '.__CLASS__.'. for model '. class_basename($this->user).'  . LOG Driver===> '.Log::getDefaultDriver().' . Queue: '. $this->queue;
//        Log::info('test handle JOB '.__CLASS__.'. for model '. class_basename($this->user).'  . LOG Driver===> '.Log::getDefaultDriver().' . Queue: '. $this->queue );

    }
}
