<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\Backend;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    ])->group(function () {
    //     Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/backIndex',[Backend\BackendControllerer::class,'backIndex'])->name('backIndex');
    
// Route::get('/backdex',[Backend\BackendController::class,'backdex'])->name('backdex');
Route::get('/blank',[Backend\Backendcontrollerer::class,'blank'])->name('blank');
Route::get('/button',[Backend\Backendcontrollerer::class,'button'])->name('button');
Route::get('/chart',[Backend\Backendcontrollerer::class,'chart'])->name('chart');
Route::get('/element',[Backend\Backendcontrollerer::class,'element'])->name('element');
Route::get('/error',[Backend\Backendcontrollerer::class,'error'])->name('error');
Route::get('/form',[Backend\Backendcontrollerer::class,'form'])->name('form');
Route::get('/signin',[Backend\Backendcontrollerer::class,'signin'])->name('signin');
Route::get('/signup',[Backend\Backendcontrollerer::class,'signup'])->name('signup');
Route::get('/table',[Backend\Backendcontrollerer::class,'table'])->name('table');
Route::get('/typography',[Backend\Backendcontrollerer::class,'typography'])->name('typography');
Route::get('/widget',[Backend\Backendcontrollerer::class,'widget'])->name('widget');
});

// Route::get('/', function () {
//     return view('index');
// });


// Frontend Routes ////////////////
Route::get('/',[Frontend\FrontendController::class,'index'])->name('index');
Route::get('/book',[Frontend\FrontendController::class,'book'])->name('book');
Route::get('/about',[Frontend\FrontendController::class,'about'])->name('about');
Route::get('/menu',[Frontend\FrontendController::class,'menu'])->name('menu');






















