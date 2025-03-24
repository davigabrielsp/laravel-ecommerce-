<?php

use App\Models\ProdutoController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProdutoController::class, 'index'])->name('produto.index');
