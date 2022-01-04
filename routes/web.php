<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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

// Route::get('/', function () {
//     return view('login_page');
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/project/{id}', [App\Http\Controllers\ProjectController::class, 'index'])->name('project.detail');
Route::get('/project/time_schedule/{id}', [App\Http\Controllers\ProjectController::class, 'time_schedule'])->name('time_schedule');
Route::get('/project/twodimension/{id}', [App\Http\Controllers\ProjectController::class, 'twodimension'])->name('twodimension');
Route::get('/project/threedimension/{id}', [App\Http\Controllers\ProjectController::class, 'threedimension'])->name('threedimension');
Route::get('/project/doc_house/{id}', [App\Http\Controllers\ProjectController::class, 'doc_house'])->name('doc_house');
Route::get('/project/rab/{id}', [App\Http\Controllers\ProjectController::class, 'rab'])->name('rab');
Route::get('/project/house_profile/{id}', [App\Http\Controllers\ProjectController::class, 'house_profile'])->name('house_profile');
Route::get('/project/progress/{id}', [App\Http\Controllers\ProjectController::class, 'progress'])->name('progress');
Route::get('/project/progress/detail/{id}', [App\Http\Controllers\ProjectController::class, 'progress_detail'])->name('progress_detail');
Route::get('/project/notes/{id}', [App\Http\Controllers\ProjectController::class, 'notes'])->name('notes');
Route::delete('/project/notes/destroy/{id}', [App\Http\Controllers\NotesController::class, 'destroy'])->name('notes.destroy');
Route::get('/project/notes/edit/{id}', [App\Http\Controllers\NotesController::class, 'edit'])->name('notes.edit');
Route::post('/project/notes/update/{id}', [App\Http\Controllers\NotesController::class, 'update'])->name('notes.update');
Route::post('/project/notes/store', [App\Http\Controllers\NotesController::class, 'store'])->name('notes.store');




