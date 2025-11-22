<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CadastroController;

Route::get('/', function () {
    return view('index');
});

Route::post('/login',[AuthController::class,'login'])->name('login.submit');

Route::get('/cadastrar',function(){
    return view('cadastro');})->name('cadastrar');

Route::post('/cadastro',[CadastroController::class,'cadastro'])->name('cadastro.submit');

