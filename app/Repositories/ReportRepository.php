<?php

namespace App\Repositories;

use App\Interfaces\ReportRepositoryInterface;
use App\Models\Seller;

class ReportRepository implements ReportRepositoryInterface
{
    public function getDailySalesReportToSeller()
    {
        $sellers = Seller::whereHas('sales', function ($query) {
            $query->whereDate('created_at', '=', now());
        })
            ->with('sales')
            ->get()
            ->map(function($seller) {
                return [
                    'id' => $seller->id,
                    'name' => $seller->name,
                    'email' => $seller->email,
                    'total' => formatCurrency($seller->sales->sum('total')),
                    'sales' => $seller->sales()->whereDate('created_at', '=', now())->get()->map(function ($sale) {
                        return [
                            'id' => $sale->id,
                            'total' => formatCurrency($sale->total),
                            'commission' => formatCurrency($sale->commission),
                            'time' => $sale->created_at->format('H:i')
                        ];
                    })
                ];
            });

        return $sellers;
    }
}
