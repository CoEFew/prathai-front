<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function profile() {
        return view('profile');
    }

    public function profile_shop() {
        return view('profile_shop');
    }
}
