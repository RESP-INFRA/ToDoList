<?php

use App\Http\Controllers\ProjetController;
use Illuminate\Support\Facades\Route;


Route::controller(ProjetController::class)->group(function () {

    Route::get('/', 'index');
    Route::get('/projet/create', 'create');
    Route::get('/projet/{id}', 'show');
    Route::get('/projet/{id}/edit', 'edit');


    Route::post('/projet', 'store');
    Route::patch('/projet/{id}', 'update');
    Route::delete('/projet/{id}', 'destroy');

});