<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/showGame', [HomeController::class, 'showGame'])->name('show-gamesu');
Route::get('/test', [HomeController::class, 'test']);

Route::get('/game', [HomeController::class, 'list2'])->name('list');
Route::post('/list', [HomeController::class, 'vlozScore'])->name('list3');

//Route::get('/insert-task-form', [HomeController::class, 'jePrazdnaCiNie'])->name('zabezpec');

Route::get('/prazdna', [HomeController::class, 'jePrazdnaCiNie'])->name('prazdna');

Route::get('/quiz', [HomeController::class, 'getInsertForm'])->name('insert-form');
Route::post('/insert-task', [HomeController::class, 'insertTask'])->name('insert');

Route::get('/select-task/{id}', [HomeController::class, 'selectTask'])->name('select');

Route::get('/rebricek', [HomeController::class, 'selectAll'])->name('select-all');

Route::post('/update-task', [HomeController::class, 'updateTask'])->name('update');
Route::get('/update-task-form/{id}', [HomeController::class, 'getUpdateForm'])->name('update-form');

Route::get('/delete-task/{id}', [HomeController::class, 'deleteTask'])->name('delete');
