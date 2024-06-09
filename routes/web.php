<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Medico;

Route::get('/', HomeController::class);
Route::get('prueba', function () {

    return Medico::all();
});
