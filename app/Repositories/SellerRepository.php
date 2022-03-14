<?php

namespace App\Repositories;

use App\Http\Resources\SellerResource;
use App\Http\Resources\SellerStoreResource;
use App\Interfaces\SellerRepositoryInterface;
use App\Models\Seller;

class SellerRepository implements SellerRepositoryInterface 
{
    public function getAllSellers() 
    {
        $sellers = Seller::all();
        return SellerResource::collection($sellers);
    }

    public function getSellerById($sellerId)
    {
        $seller = Seller::findOrFail($sellerId);
        return new SellerStoreResource($seller);
    }

    public function createSeller(array $sellerData) 
    {
        $sellerData['commission'] = config('tray.commission');

        $seller = Seller::create($sellerData);
        return new SellerStoreResource($seller);
    }

}
