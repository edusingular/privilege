<?php

namespace App\Services;

use App\Models\Balance;
use Illuminate\Support\Facades\Auth;

class ExtratoService
{
    
    public function getExtratos()
    {
        return Balance::where('user_id', Auth::user()->id)->paginate(20);
    }
}
