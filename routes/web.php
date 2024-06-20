<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\MainController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
**/

Route::get('/', [MainController::class, 'welcome'])->name('home');
Route::view('/nosotros', [MainController::class, 'nosotros'])->name('nosotros');


Route::get('contact', [ContactFormController::class, 'form'])->name('contact.form');
Route::post('send-form', [ContactFormController::class, 'send'])->name('contact.send');
