<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GameLogsController;

Route::get('/', [GameController::class, 'index'])
    ->name('game.index');

Route::get('/logs', [GameLogsController::class, 'index'])
    ->name('game.logs');
