<?php

namespace App\Repositories;

use App\Http\Resources\SaleResource;
use App\Interfaces\SaleRepositoryInterface;
use App\Interfaces\SellerRepositoryInterface;
use App\Models\Sale;

class SaleRepository implements SaleRepositoryInterface 
{

    private SellerRepositoryInterface $sellerRepository;

    public function __construct(SellerRepositoryInterface $sellerRepository) 
    {
        $this->sellerRepository = $sellerRepository;
    }

    public function getSalesBySellerId($sellerId) 
    {
        $sales = Sale::whereSellerId($sellerId)->get();
        return SaleResource::collection($sales);
    }

    public function createSale(array $saleData) 
    {
        $seller = $this->sellerRepository->getSellerById($saleData['seller_id']);
        $saleData['commission'] = ($saleData['total'] * $seller->commission) / 100;

        $sale = Sale::create($saleData);
        return new SaleResource($sale);
    }
}
