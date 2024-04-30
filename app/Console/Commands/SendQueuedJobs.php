<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendQueuedJobs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:queuedJobs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is used to send queued jobs';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return $this->call('queue:work');
    }
}
