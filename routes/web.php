<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;


Route::get('/', action: [JobController::class, 'index']);

Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])
    ->middleware('auth');


Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);
// by default it uses 'id' but we want to use 'name'
//Route::get('/tag/{tag:id}', action: TagController::class);


// Auth
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterUserController::class, 'create']);
    Route::post('/register', [RegisterUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});

Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');


Route::get('/careers', function () {
    return view('jobs.careers');
});

Route::get('/salaries', function () {
    return view('jobs.salaries');
});

Route::get('/companies', function () {
    return view('jobs.companies');
});
