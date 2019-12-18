<?php

namespace App\Listeners;

use App\Events\OrderStatus;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Order;

class SendShipmentNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderStatus  $event
     * @return void
     */
    public function handle(OrderStatus $event)
    {
        $order = new Order;
        $order = $event;
        return $event->order->order_status;
    }
}
