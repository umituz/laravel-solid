<?php

use App\Http\Controllers\Api\PostsController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
    Route::get('/', [PostsController::class, 'index'])->name('index');
    Route::get('/{idCard}', [PostsController::class, 'show'])->name('show');
    Route::post('/', [PostsController::class, 'store'])->name('store');
    Route::put('/{id}', [PostsController::class, 'update'])->name('update');
    Route::delete('/{id}', [PostsController::class, 'destroy'])->name('destroy');
});
