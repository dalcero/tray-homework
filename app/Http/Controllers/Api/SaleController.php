<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SalePostRequest;
use App\Interfaces\SaleRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class SaleController extends Controller
{
    private SaleRepositoryInterface $saleRepository;

    public function __construct(SaleRepositoryInterface $saleRepository) 
    {
        $this->saleRepository = $saleRepository;
    }

    public function index($sellerId): JsonResponse 
    {
        return response()->json(
            [
            'data' => $this->saleRepository->getSalesBySellerId($sellerId),
            ],
            Response::HTTP_OK);
    }

    public function store(SalePostRequest $request): JsonResponse 
    {
        $saleData = $request->only([
            'seller_id',
            'total'
        ]);

        return response()->json(
            [
                'success' => true,
                'message' => 'Sale Created',
                'data'    => $this->saleRepository->createSale($saleData)
            ],
            Response::HTTP_CREATED
        );
    }
}
