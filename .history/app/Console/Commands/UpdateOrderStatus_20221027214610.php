<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateOrderStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update-order-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update order status for user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
