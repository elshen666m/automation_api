<?php

use App\Http\Controllers\DatacenterController;
use App\Http\Controllers\MachineController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('/datacenters')->controller(DatacenterController::class)->group(function () {
    Route::get('/', 'all');
});

Route::prefix('/machines')->controller(MachineController::class)->group(function () {
    Route::post('/', 'create');
    Route::post('/start', 'start');
    Route::post('/stop', 'stop');
    Route::post('/reset', 'reset');
});
