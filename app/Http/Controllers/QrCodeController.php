<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function generate($param)
    {
        $qrcode = QrCode::size(200)->color(30, 30, 30)->generate($param);
        return $qrcode;
    }
}
