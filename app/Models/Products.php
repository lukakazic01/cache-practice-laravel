<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table(name: 'products')]
#[Fillable(['price', 'name', 'description'])]
class Products extends Model
{

    public static function getLatest(int $limit) {
        return self::query()->orderBy('created_at', 'descw')->limit($limit)->get();
    }

}
