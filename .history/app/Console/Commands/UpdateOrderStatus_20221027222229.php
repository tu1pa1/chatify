<?php

namespace App\Console\Commands;

use App\Models\Order;
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
        $orders = Order::where('user_id', auth()->id())->get();
        dd(1);
        foreach ($orders as $order) {
            if ($order->status == 1) {
                $order->update([
                    'status' => 0
                ]);
            }
        }

        \Log::info('--------------------------------');
        \Log::info('Change order status sucessfully!');
        \Log::info('--------------------------------');
    }
}
