<?php

use App\Http\Controllers\GameLogsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/logs', [GameLogsController::class, 'store']);
