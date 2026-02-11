<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserProduct extends Model
{
    //
    protected $fillable = [
        'id',
        'product_id',
        
    ];

    public function products() :BelongsTo{

    return $this->belongsTo(Product::class);
    }
}
