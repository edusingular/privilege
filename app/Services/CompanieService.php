<?php

namespace App\Services;

use App\Models\Companie;
use Illuminate\Support\Facades\Auth;

class CompanieService
{


    public function getCompany()
    {
        return Companie::findOr(1);
    }

}
