<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\GameController;
use \App\Http\Controllers\GuessController;

Route::get('/games/{username}', [GameController::class, 'index'])
    ->name('games.index');

Route::group([
    'prefix' => 'users',
    'as' => 'users.',
    'controller' => UserController::class
], function () {
    Route::get('/', 'index')
        ->name('index');

    Route::get('/{username}', 'show')
        ->name('show');

    Route::group([
        'middleware' => ['auth:sanctum', 'verified']
    ], function () {
        Route::put('/{user}', 'update')
            ->name('update');

        Route::patch('/{user}', 'update')
            ->name('update');

        Route::delete('/{user}', 'destroy')
            ->name('destroy');

        Route::delete('{user}/avatar', 'deleteAvatar')
            ->name('delete.avatar');
    });
});

Route::group([
    'prefix' => 'guesses',
    'as' => 'guesses.',
    'controller' => GuessController::class
], function () {
    Route::get('/{username}', 'user')
        ->name('user');

    Route::post('/', 'store')
        ->middleware(['auth:sanctum', 'verified'])
        ->name('store');
});
