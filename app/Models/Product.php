<?php

namespace App\Models;

use App\Models\UserProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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


    public function userProducts() :HasMany 
    {
        return $this->hasMany(UserProduct::class);
    }



    
}


   

