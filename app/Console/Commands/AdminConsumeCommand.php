<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class AdminConsumeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rabbit:admin-consume';

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
        $connection = new AMQPStreamConnection(
            Config::get('queue.connections.rabbitmq.hosts.0.host'),
            Config::get('queue.connections.rabbitmq.hosts.0.port'),
            Config::get('queue.connections.rabbitmq.hosts.0.user'),
            Config::get('queue.connections.rabbitmq.hosts.0.password'),
            Config::get('queue.connections.rabbitmq.hosts.0.vhost')
        );
        $channel = $connection->channel();

//        $channel->queue_declare('evd', false, true, false, false);

        $msg = new AMQPMessage('Hello World!');
        $channel->basic_publish($msg, '', 'evd');

        echo " [x] Sent 'Hello World!'\n";

        $channel->close();
        $connection->close();
    }
}
