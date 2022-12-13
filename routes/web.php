<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('aluno')->group(function(){
    Route::get('',[AlunoController::class,'index'])->name('aluno.index');
    Route::get('/create',[AlunoController::class,'create'])->name('aluno.create');
    Route::post('',[AlunoController::class,'store'])->name('aluno.store');
    Route::get('/{id}',[AlunoController::class,'show'])->name('aluno.show');
    Route::get('/{id}/edit',[AlunoController::class,'edit'])->name('aluno.edit');
    Route::post('/{id}/update',[AlunoController::class,'update'])->name('aluno.update');
    Route::get('/{id}/delete',[AlunoController::class,'delete'])->name('aluno.delete');
});
