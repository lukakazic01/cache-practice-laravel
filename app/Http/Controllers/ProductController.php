<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Products;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(ProductRepository $productRepository)
    {
        $products = $productRepository->getLatestProducts(10);
        return view('products.index');
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreProductRequest $request) {
        Products::query()->create($request->validated());
        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

}
