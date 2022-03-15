<?php

namespace App\Console\Commands;

use App\Services\MailService;
use Illuminate\Console\Command;

class SendDailySalesReportToSeller extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tray:sendDailySalesReportToSeller';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send daily sales report to sellers';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(MailService $mailService)
    {
        $mailService->sendDailySalesReportToSeller();
        $this->info('OK! - Send daily sales report to sellers');
        return 0;
    }
}
