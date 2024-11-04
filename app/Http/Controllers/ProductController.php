<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductShowRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }


    public function index(Request $request)
    {

        $items = $this->productService->getAllProducts();
        return ProductResource::collection($items);
    }

    public function show(Product $product)
    {
        return ProductResource::make($product);
    }

}

// 2 iz 5
