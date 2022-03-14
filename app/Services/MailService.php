<?php

namespace App\Services;

use App\Interfaces\ReportRepositoryInterface;
use App\Mail\SendDailySalesReportToSellerEmail;
use Illuminate\Support\Facades\Mail;

class MailService
{
    private ReportRepositoryInterface $reportRepository;

    public function __construct(ReportRepositoryInterface $reportRepository)
    {
        $this->reportRepository = $reportRepository;
    }
    
    public function sendDailySalesReportToSeller()
    {
        $sellers = $this->reportRepository->getDailySalesReportToSeller();

        foreach ($sellers as $seller) {
            Mail::to($seller['email'])->send(new SendDailySalesReportToSellerEmail($seller));
        }

        return;
    }
}