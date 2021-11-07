<?php

use App\Http\Controllers\Administrator\AboutController;
use App\Http\Controllers\Administrator\ContactController;
use App\Http\Controllers\Administrator\InformationController;
use App\Http\Controllers\Administrator\LinkController;
use App\Http\Controllers\Administrator\PanelController;
use App\Http\Controllers\Administrator\PostController;
use App\Http\Controllers\Administrator\ProductController;
use App\Http\Controllers\Administrator\SliderController;
use App\Http\Controllers\Administrator\SocialController;
use App\Http\Controllers\Administrator\TeamController;
use App\Http\Controllers\HomeController as AuthHome;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HomeController as FrontHome;

Route::get('/', [FrontHome::class, "index"])->name('home.page');
Route::get('/product/{id}', [FrontHome::class, "product"])->name('home.product');
Route::get('/post/{id}', [FrontHome::class, "post"])->name('home.post');
Route::post('/contact', [FrontHome::class, "contact"])->name('home.contact.ajax');

Auth::routes();

Route::get('/home', [AuthHome::class, 'index'])->name('home');

Route::middleware('auth')->prefix('administrator')->group(function () {
    Route::get('/panel/show/data', [PanelController::class, "data"])->name('panel.show.data');
    Route::resource('/panel', PanelController::class)->parameters(['panel' => 'id']);
    Route::resource('/slider', SliderController::class)->parameters(['slider' => 'id']);
    Route::resource('/about', AboutController::class)->parameters(['about' => 'id']);
    Route::resource('/product', ProductController::class)->parameters(['product' => 'id']);
    Route::resource('/team', TeamController::class)->parameters(['team' => 'id']);
    Route::resource('/post', PostController::class)->parameters(['post' => 'id']);
    Route::resource('/info', InformationController::class)->parameters(['info' => 'id']);
    Route::resource('/social', SocialController::class)->parameters(['social' => 'id']);
    Route::resource('/link', LinkController::class)->parameters(['link' => 'id']);
    Route::resource('/contact', ContactController::class)->parameters(['contact' => 'id']);
});
