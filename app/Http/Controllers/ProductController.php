<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreProductRequest $request) {
        dd($request->all());
    }

}
