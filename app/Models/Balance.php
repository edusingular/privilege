<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    //
    protected $table = 'balance';

    protected $fillable = [
        'user_id',
        'company_id',
        'package',
        'amount',
        'tipo',
        'description',
        'status'
    ];
}
