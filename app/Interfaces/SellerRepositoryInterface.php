<?php

namespace App\Interfaces;

interface SellerRepositoryInterface 
{
    public function getAllSellers();
    public function getSellerById($sellerId);
    public function createSeller(array $sellerData);
}