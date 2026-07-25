<?php

namespace App\Repositories;

use App\Models\Products;
use Illuminate\Support\Collection;

class ProductRepository
{
    public function __construct(
        public Products $product,
    ){}

    /**
     * @param int $limit
     * @return Collection<int, Products>
     */
    public function getLatestProducts(int $limit): Collection {
        return $this->product::getLatest($limit);
    }
}
