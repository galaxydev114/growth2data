<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Quoter\ConsultancyController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('home', function() {
	return redirect('/');
});

/*-------------------------------------------------------------------------------
# Common Pages
--------------------------------------------------------------------------------*/
Route::get('msg-enviada', function () {
    return view('common.messages.submit_success');
})->name('messages.submit.success');

/*-------------------------------------------------------------------------------
# Quoter Routes
--------------------------------------------------------------------------------*/
Route::get('quoter', function () {
    return view('quoter.index');
})->name('quoter');
Route::get('consultoria-servico', [ConsultancyController::class, 'index']);
Route::post('consultoria-servico', [ConsultancyController::class, 'save']);