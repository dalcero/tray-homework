<?php

namespace App\Http\Controllers;

use App\Jobs\SendDailySalesReportToSellerJob;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
