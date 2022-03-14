<?php

namespace App\Console\Commands;

use App\Services\MailService;
use Illuminate\Console\Command;
use Log;

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

    /* @var MailService */
    private $mailService;

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->mailService->sendDailySalesReportToSeller();
        $this->info('OK! - Send daily sales report to sellers');
        return 0;
    }
}
