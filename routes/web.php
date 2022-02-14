<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
use Illuminate\Support\Facades\Route;


Route::get('/lang/{id}', [LocalizationController::class, 'lang'])->name('lang');

Route::group(['middleware' => ['localization']], function() {

    Route::get('/', [HomeController::class, 'home'])->name('home');

    Route::get('/register', [AccountController::class, 'displayregister'])->name('register');
    Route::post('/startregister', [AccountController::class, 'startregister'])->name('startregister');

    Route::get('/login', [AccountController::class, 'displaylogin'])->name('login');
    Route::post('/startlogin', [AccountController::class, 'startlogin'])->name('startlogin');

    Route::group(['middleware' => ['auth']], function() {

        Route::get('/logout', [AccountController::class, 'logout'])->name('logout');

        Route::get('/ebookdetail/{id}', [HomeController::class, 'ebookdetail'])->name('ebookdetail');
        Route::post('/addtocart/{id}', [CartController::class, 'addtocart'])->name('addtocart');

        Route::get('/cart', [CartController::class, 'cart'])->name('cart');
        Route::delete('/deletecart/{id}', [CartController::class, 'deletecart'])->name('deletecart');
        Route::delete('/submitcart', [CartController::class, 'submitcart'])->name('submitcart');

        Route::get('/profile', [AccountController::class, 'profile'])->name('profile');
        Route::put('/updateprofile', [AccountController::class, 'updateProfile'])->name('updateProfile');

        Route::get('/success', function () {
            return view('success');
        })->name('success');

        Route::get('/saved', function () {
            return view('saved');
        })->name('saved');

        Route::get('/logoutsuccess', function () {
            return view('logoutsuccess');
        })->name('logoutsuccess');

        Route::group(['middleware' => ['admin']], function() {

            Route::get('/accountmaintenance', [AccountController::class, 'accountmaintenance'])->middleware('admin')->name('accountmaintenance');
            Route::delete('/deleteaccount/{id}', [AccountController::class, 'deleteaccount'])->middleware('admin')->name('deleteaccount');

            Route::get('/updaterole/{id}', [AccountController::class, 'updaterole'])->middleware('admin')->name('updaterole');
            Route::patch('/startupdaterole/{id}', [AccountController::class, 'startupdaterole'])->middleware('admin')->name('startupdaterole');

        });
    });
});
