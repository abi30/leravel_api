<?php

namespace App\Models\model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\model\Product;

class Review extends Model
{
    public function product()
    {

        return $this->belongsTo(Product::class);

    }
}
