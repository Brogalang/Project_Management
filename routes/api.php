<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/projects', [App\Http\Controllers\projectController::class, 'api_projects'])->name('api_projects');
Route::get('/rabSubDetails/{id}', [App\Http\Controllers\rab_sub_detailsController::class, 'rabSubDetailsShowByRabDtl'])->name('rabSubDetailsShowByRabDtl');
Route::post('/rabDetailsBiaya', [App\Http\Controllers\rab_detailController::class, 'rabDetailsBiaya'])->name('rabDetailsBiaya');
