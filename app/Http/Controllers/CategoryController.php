<?php

namespace App\Http\Controllers;


use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Http\Resources\CategoryShowResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function index()
    {
        return CategoryShowResource::collection(Category::all()->whereNull('parent_id'));
    }

    public function show(int $id)
    {
        $category = Category::with('products')->findOrFail($id);
        return CategoryShowResource::make();
    }

    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        return $category->fresh();
    }

    public function store(CategoryStoreRequest $request)
    {
        $data = $request->validated();
        return Category::create($data);
    }
// 4 iz 5
    public function destroy()
    {

    }
}
