<?php

namespace App\Models;

use App\Models\UserProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    //

    protected $fillable = [
        'product_name',
        'description',
        'price',
        'length',
        'image',
    ];


     public function userProduct(): HasOne
    {
        return $this->hasOne(UserProduct::class);
    }



    
}


   

