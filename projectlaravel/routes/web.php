<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\connexioncontroller;
use App\Http\Middleware\Authentificate;

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
    return view('acceuil');
})->name('acceuil');

Route::get('/deconnexion',[connexioncontroller::class, 'Logout']);
// Route::get('/connexion', function () {
//     return view('login');
// })->name('connexion');



Route::get('/inscription',[connexioncontroller::class, 'register'])->name('register');
Route::post('/inscription', [connexioncontroller::class, 'showRegistrationForm']);




Route::get('/connexion', [connexioncontroller::class, 'login'])->name('connexion');
Route::post('/connexion', [connexioncontroller::class, 'showLoginForm']);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');



