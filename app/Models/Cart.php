<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts'; // Nome da tabela no banco de dados
    protected $fillable = ['user_id', 'product_id', 'quantity', 'price', 'total', 'company_id'];

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
