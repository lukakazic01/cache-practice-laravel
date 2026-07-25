<?php

namespace App\View\Components;

use App\Models\Products;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCard extends Component
{

    public function __construct(
        public Products $product,
    )
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.product-card');
    }
}
