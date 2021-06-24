<?php

namespace App\Mail;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderPlaced extends Mailable
{
    use Queueable, SerializesModels;
    public $order;

    /**
     * Create a new message instance.
     *
     * @param Order $order
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): OrderPlaced
    {
        return $this->to($this->order->billing_email,  $this->order->billing_name)
                    ->bcc('another@another.com')
                    ->subject('Order Confirmation Croydon')
                    ->markdown('emails.orders.placed');
    }
}
