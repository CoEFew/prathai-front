<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index() {
        return view('index');
    }

    public function index_login() {
        return view('index_login');
    }

    public function follows() {
        return view('follows');
    }
}
