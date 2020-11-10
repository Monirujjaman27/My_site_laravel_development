<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Frontend\HomeController;


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

Route::get('/', [HomeController::class, 'index'])->name('website.index');
Route::get('/resume-download/{file}', [HomeController::class, 'downloadResume'])->name('downloadResume');

// categoryBy portfolioi 
Route::get('/data/{id}', [HomeController::class, 'getProtfoliobyid'])->name('website.catById');


// contact page route 
Route::get('/contact', [HomeController::class, 'contact'])->name('website.contact');
// about page route 
Route::get('/about', [HomeController::class, 'about'])->name('website.about');
Route::get('/packages', [HomeController::class, 'packages'])->name('website.packages');
Route::get('/packageDetails', [HomeController::class, 'packageDetails'])->name('website.packageDetails');
Route::get('/code', [HomeController::class, 'code'])->name('website.code');
Route::get('/faq', [HomeController::class, 'faq'])->name('website.faq');
