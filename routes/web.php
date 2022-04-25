<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Build v8.83.6
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/index', [IndexController::class, 'index'])->name('index');

Route::get('/',function(){
    return view('index');
});

Route::get('/index_login',function(){
    return view('index_login');
});

Route::get('/amuletlist',function(){
    return view('amuletlist');
});

Route::get('/certificate',function(){
    return view('certificate');
});

Route::get('/new',function(){
    return view('new');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/policy',function(){
    return view('policy');
});

Route::get('/profile',function(){
    return view('profile');
});

Route::get('/payment',function(){
    return view('payment');
});

Route::get('/register_shop',function(){
    return view('register_shop');
});

Route::get('profile_shop',function(){
    return view('profile_shop');
});

Route::get('live',function(){
    return view('live');
});

Route::get('follows',function(){
    return view('follows');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
