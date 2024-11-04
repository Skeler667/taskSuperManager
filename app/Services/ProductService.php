<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function getAllProducts()
    {
        return Product::all();
    }

    public function getById(int $id): Product
    {
        return Product::findOrFail($id);
    }
}
