<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media_products extends Model
{
    //
 protected $fillable = [
    'company_id',
    'product_id',
    'photo_video'
 ];
    public function Products()
    {
       $Products = $this->belongsTo(Products::class, 'id');
       return $Products;
    }
}
