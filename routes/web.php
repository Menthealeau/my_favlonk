<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\CategoryController;

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
    return view('home');
});

Route::get('test', function () {
    return view('test.index');
})->name('test');

Route::post('link/add', [LinksController::class, 'store'])->name('link.store');
Route::get('link/delete{id}', [LinksController::class, 'delete'])->name('link.delete')->where('id', '[0-9]+');

Route::get('link/update{id}', [LinksController::class, 'linkToUpdate'])->name('link.update')->where('id', '[0-9]+');

Route::post('link.update', [LinksController::class, 'update'])->name('update');

Route::get('category', [CategoryController::class,'index'])->name('category.index');
Route::get('category/{id}', [CategoryController::class, 'linksByCat'])->name('category.search');
