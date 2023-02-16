<?php

use App\Http\Controllers\PagamentoController;
use Illuminate\Support\Facades\Route;

Route::post('/pagamento', [PagamentoController::class, 'iniciarPagamento'])->name('pagamento');


Route::get('/', function () {
    return view('welcome');
});
