<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TodoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:sanctum'], 'prefix' => 'todo', 'as' => 'todo.'], function () {
    Route::get("list", [TodoController::class, 'index'])->name('index');
    Route::get("/{todo}", [TodoController::class, 'show'])->name('show');
    Route::post("store", [TodoController::class, 'store'])->name('store');
    Route::put("/{todo}", [TodoController::class, 'update'])->name('update');
});
