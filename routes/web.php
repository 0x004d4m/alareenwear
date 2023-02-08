<?php

use App\Http\Controllers\LandingPageController;
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

Route::get('/', [LandingPageController::class, 'welcome']);
Route::get('/about', [LandingPageController::class, 'about']);
Route::get('/products', [LandingPageController::class, 'products']);
Route::get('/team', [LandingPageController::class, 'team']);
Route::get('/blog', [LandingPageController::class, 'blog']);
Route::get('/gallery', [LandingPageController::class, 'gallery']);
Route::get('/contact', [LandingPageController::class, 'contact']);
Route::post('/contact', [LandingPageController::class, 'contact2']);
Route::get('/set-language/{locale}', [LandingPageController::class,'setLanguage'])->name('set-language');
