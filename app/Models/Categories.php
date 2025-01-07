<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //\
    protected $fillable = [
        'title',
        'company_id'
    ];

    public function products()
    {
        $products = $this->hasMany(Products::class, 'category_id');
        return $products;
    }
}
