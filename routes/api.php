<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TorrentController;

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

Route::get('torrents/{name}', [TorrentController::class, 'show']);
Route::post('torrents', [TorrentController::class, 'store']);
