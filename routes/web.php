<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DashboardController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return view('teste');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

    Route::resource('gestor/alunos', AlunoController::class);
    Route::resource('gestor/professores', ProfessorController::class);
    Route::resource('gestor/disciplinas', DisciplinaController::class);
    Route::resource('gestor/matriculas', MatriculaController::class);



    Route::get('gestor/dashboard', [DashboardController::class,'index']);
    Route::get('/dashboard/turmas/{periodo}', [TurmaController::class, 'showTurmasPorPeriodo'])->name('turmas.por.periodo');

});

require __DIR__.'/auth.php';
