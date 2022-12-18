<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LanguageController;



require __DIR__ . '/auth.php';

Route::get('/', [PageController::class, 'blankPage']);

Route::get('/page-blank', [PageController::class, 'blankPage']);
Route::get('/page-collapse', [PageController::class, 'collapsePage']);

Route::get('lang/{locale}', [LanguageController::class, 'swap']);
