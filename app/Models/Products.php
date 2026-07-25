<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

#[Table(name: 'products')]
#[Fillable(['price', 'name', 'description'])]
/**
 * @param string $name
 * @param string $description
 * @param integer $price
 */
class Products extends Model
{

    /**
     * @param int $limit
     * @return Collection<int, Products>
     */
    public static function getLatest(int $limit): Collection {
        return self::query()->orderBy('created_at', 'desc')->limit($limit)->get();
    }

}
