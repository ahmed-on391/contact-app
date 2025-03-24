<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProfileController;
use App\Models\Person;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// **************************************************************************************************************************************
// ده خاص ب person يا عم احمد
Route::controller(PersonController::class)->prefix('person')->name('person')->middleware('auth')->group(function(){
    Route::get('/' , 'index')->name('.index');
    Route::get('/create' , 'create')->name('.create');
    Route::post('/store' , 'store')->name('.store');
    Route::get('/{person}/show', 'show')->name('.show');
    Route::get('/{person}/edit' , 'edit')->name('.edit');
    Route::put('/{person}/update' , 'update')->name('.update');
    Route::delete('/{person}/destroy' , 'destroy')->name('.destroy');
});

// ---------------------------------------------------------------------------------------------------------------------------------------
// ده خاص ب Bussiness يا عم احمد

Route::controller(BusinessController::class)->prefix('business')->name('business')->middleware('auth')->group(function(){
    Route::get('/' , 'index')->name('.index');
    Route::get('/create' , 'create')->name('.create');
    Route::post('/store' , 'store')->name('.store');
    Route::get('/{business}/show', 'show')->name('.show');
    Route::get('/{business}/edit' , 'edit')->name('.edit');
    Route::put('/{business}/update' , 'update')->name('.update');
    Route::delete('/{business}/destroy' , 'destroy')->name('.destroy');
});


require __DIR__.'/auth.php';