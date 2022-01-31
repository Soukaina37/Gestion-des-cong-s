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

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () { // http://localhost/test/public/dashboard
   $conges = DB::table('conges')
            ->join('users', 'conges.id', '=', 'users.id')
            ->select('conges.*', 'users.name')
            ->get();
    return view('dash',['conges' => $conges]);
})->middleware(['auth'])->name('dashboard');


Route::get('/demande', function () {
    return view('addDemande');
})->middleware(['auth'])->name('demande');


Route::post('postinsert', [CongeViewController::class,'store']);
   

require __DIR__.'/auth.php';

