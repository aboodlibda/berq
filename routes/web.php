<?php

use App\Http\Controllers\AdvertisementsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\TagsController;
use Illuminate\Support\Facades\Route;


Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);


Route::get('/',[HomeController::class,'main'])->name('main');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    //Resource Routes\\
    Route::get('/', function () {
        return view('cms.dashboard');
    })->name('dashboard');

    Route::resource('tags',TagsController::class);
    Route::resource('sections',SectionsController::class);
    Route::resource('advertisements',AdvertisementsController::class);

});
Route::resource('articles',ArticlesController::class);
Route::resource('categories',CategoriesController::class);








