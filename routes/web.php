<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin/announcement')->name('announcement.')->group(function () {
    // index
    Route::get('', [AnnouncementController::class, 'index'])->name('index'); // announcement.index

    // create
    Route::get('create', [AnnouncementController::class, 'create'])->name('create'); // announcement.create

    // store
    Route::post('', [AnnouncementController::class, 'store'])->name('store'); // announcement.store
});
