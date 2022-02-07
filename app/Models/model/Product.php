<?php

namespace App\Models\model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\model\Review;

class Product extends Model
{

     public function reviews(){
         return $this->hasMany(Review::class);
     }


    use HasFactory;
}
