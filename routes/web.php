<?php

use App\Models\User;
use App\Models\Order;
use App\Events\EventFire;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'users' => User::all(),
        'orderCount' => Order::find(1)->count
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/event-and-listeners', function () {
    $user = User::create([
        'name' => 'test' . rand(),
        'email' => 'test' . rand() . '@gmail.com',
        'password' => md5('123123123')
    ]);

    EventFire::dispatch($user);

    return back();
})->name('laravel.event_listeners');

Route::get('/listen', function () {
    return view('listen');
});

require __DIR__.'/auth.php';
