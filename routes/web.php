<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('admin.login'); // porque está dentro de admin
})->name('login');

Route::get('/painel', function () {
    return view('admin.painel.painel'); // dentro da pasta painel
})->name('painel');

Route::prefix('admin')->group(function () {
    Route::get('servicos', [ServicoController::class, 'index'])->name('servicos.index');
    Route::get('servicos/criar', [ServicoController::class, 'create'])->name('servicos.create');
    Route::post('servicos', [ServicoController::class, 'store'])->name('servicos.store');
    Route::get('servicos/{id}/editar', [ServicoController::class, 'edit'])->name('servicos.edit');
    Route::put('servicos/{id}', [ServicoController::class, 'update'])->name('servicos.update');
    Route::delete('servicos/{id}', [ServicoController::class, 'destroy'])->name('servicos.destroy');
});
