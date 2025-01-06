<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Products extends Model
{
    //
    use HasFactory, Notifiable;
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'amount',
        'amount_promotion',
        'status',
    ];

    public function media_products()
    {
        $media_products = $this->hasMany(Media_products::class, 'product_id');
        return $media_products;
    }
    public function categories()
    {
        $categories = $this->belongsTo(Categories::class);
        return $categories;
    }
}
