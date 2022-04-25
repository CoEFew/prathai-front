<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificateController extends Controller
{
    function certificate() {
        return view('certificate');
    }
}
