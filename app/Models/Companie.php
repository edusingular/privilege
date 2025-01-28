<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Companie extends Model
{
    //
    protected $table = 'companies';
    protected $fillable = [
        'company',
        'email',
        'pass',
        'cnpj',
        'razao',
        'logo',
        'instagram',
        'facebook',
        'site',
        'paid',
        'phone',
        'status'
    ];
}
