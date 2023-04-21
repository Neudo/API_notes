<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




// private posts and authors routes
Route::group(['middleware' => ['auth:sanctum']], function () {
// private post routes
    Route::get('/notes', [NoteController::class, 'show'])->name('note.show');
    Route::post('/notes', [NoteController::class, 'create'])->name('note.add');
    Route::get('/notes/{id}', [NoteController::class, 'showOne'])->name('note.showOne');
    Route::put('/notes/{id}', [NoteController::class, 'edit'])->name('note.edit');
    Route::delete('/notes/{id}', [NoteController::class, 'delete'])->name('note.delete');
});
