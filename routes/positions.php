<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PositionController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('position/', [PositionController::class, 'index'])->name('position.index');
});
