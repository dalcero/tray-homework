<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SellerPostRequest;
use App\Interfaces\SellerRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class SellerController extends Controller
{
    private SellerRepositoryInterface $sellerRepository;

    public function __construct(SellerRepositoryInterface $sellerRepository) 
    {
        $this->sellerRepository = $sellerRepository;
    }

    public function index(): JsonResponse 
    {
        return response()->json(
            [
            'data' => $this->sellerRepository->getAllSellers(),
            ],
            Response::HTTP_OK);
    }

    public function store(SellerPostRequest $request): JsonResponse 
    {
        $sellerData = $request->only([
            'name',
            'email'
        ]);

        return response()->json(
            [
                'success' => true,
                'message' => 'Seller Created',
                'data'    => $this->sellerRepository->createSeller($sellerData)
            ],
            Response::HTTP_CREATED
        );
    }

}
