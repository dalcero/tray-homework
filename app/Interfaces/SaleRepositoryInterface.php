<?php

namespace App\Interfaces;

interface SaleRepositoryInterface 
{
    public function getSalesBySellerId($sellerId);
    public function createSale(array $saleData);
}