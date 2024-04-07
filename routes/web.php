<?php

use App\Http\Controllers\FullCalendarController;
use App\Http\Controllers\PagamentoController;
use Illuminate\Support\Facades\Route;

Route::post('/pagamento', [PagamentoController::class, 'iniciarPagamento'])->name('pagamento');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/getevent', [FullCalendarController::class, 'getEvent'])->name('getevent');
Route::post('/createevent', 'FullCalendarController@createEvent')->name('createevent');
Route::post('/deleteevent', 'FullCalendarController@deleteEvent')->name('deleteevent');