<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendDailySalesReportToSellerEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var seller
     */
    protected $seller;

    /**
     * Create a new message instance.
     *
     * @param $sellers
     */
    public function __construct($seller)
    {
        $this->seller = $seller;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $seller = $this->seller;

        return $this
            ->subject("Tray - Relatório de Vendas Diário")
            ->markdown('emails.sendDailySalesReportToSeller')
            ->with(compact('seller'));
    }
}
