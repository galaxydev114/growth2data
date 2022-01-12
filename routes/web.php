<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LocalizationController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Quoters\ConsultanciesController;
use App\Http\Controllers\ContactsController;

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;

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

Auth::routes();

/*-------------------------------------------------------------------------------
# Common Pages
--------------------------------------------------------------------------------*/
// submit success msg
Route::get('msg-enviada', function () {
    return view('common.messages.submit_success');
})->name('messages.submit.success');

/*-------------------------------------------------------------------------------
# Quoter Routes
--------------------------------------------------------------------------------*/
Route::get('quoter', function () {
    return view('quoters.index');
})->name('quoter');

Route::get('consultoria-servico', [ConsultanciesController::class, 'index']);
Route::post('consultoria-servico', [ConsultanciesController::class, 'save']);

// schools
Route::get('escola', function () {
    return view('quoters.schools.index');
})->name('school');

Route::prefix('escola')->group(function() {
    Route::get('pbi-escola', function() {
        return view('quoters.schools.pbi_school');
    })->name('school.pbi');

    Route::get('tableau-escola', function() {
        return view('quoters.schools.tableau_school');
    })->name('school.tableau');

    Route::get('python-escola', function() {
        return view('quoters.schools.python_school');
    })->name('school.python');

    Route::get('sql-escola', function() {
        return view('quoters.schools.sql_school');
    })->name('school.sql');

    Route::get('questionario/{school}', function() {
        return view('quoters.schools.school_questions');
    });
});

/*-------------------------------------------------------------------------------
# Contact Routes
--------------------------------------------------------------------------------*/
Route::get('contato', [ContactsController::class, 'index'])->name('contact');
Route::post('contato', [ContactsController::class, 'saveContact'])->name('contact.save');

/*-------------------------------------------------------------------------------
# About
--------------------------------------------------------------------------------*/
Route::get('sobre', function () {
    return view('about');
})->name('about');

/*-------------------------------------------------------------------------------
# Subscription
--------------------------------------------------------------------------------*/
Route::get('planos-clube', function () {
    return view('subscriptions.subscription_plan');
})->name('subscription.plan');

/*================================================================================
# Admin Routes
=================================================================================*/
Route::prefix('admin')->group(function() {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');

    Route::get('dashboard', DashboardController::class)->name('admin.dashboard');
});

Route::get('lang/{locale}', LocalizationController::class);