<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreProductRequest $request) {
        Products::query()->create($request->validated());
        return redirect()->back()->with('success', 'Product created successfully!');
    }

}
