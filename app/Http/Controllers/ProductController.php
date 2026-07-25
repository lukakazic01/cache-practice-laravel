<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Products;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{

    public function index(ProductRepository $productRepository)
    {
        $products = Products::hydrate(
            Cache::remember('latestProducts', 500, function () use($productRepository) {
                return $productRepository->getLatestProducts(10)->toArray();
            })
        );
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreProductRequest $request) {
        Products::query()->create($request->validated());
        Cache::forget('latestProducts');
        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    public function flush() {
        Cache::forget('latestProducts');
        return redirect()->route('products.index');
    }

}
