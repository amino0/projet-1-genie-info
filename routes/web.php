<?php
use App\Http\Controllers\homepagecontroller;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bonsoir',[homepagecontroller::class, 'index'])->name('index');
Route::post('/insert',[homepagecontroller::class, 'ajoute_etudiant'])->name('ajoute_etudiant');
Route::get('/delete/{id}',[homepagecontroller::class, 'supprimer_etudiant'])->name('supprimer_etudiant');