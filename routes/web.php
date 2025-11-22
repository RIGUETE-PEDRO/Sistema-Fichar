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

Route::post('/cadastrar',[CadastroController::class,'cadastro'])->name('cadastro.submit');

Route::get('/login',function(){
    return view('index');})->name('login.form');

Route::get('/home',function(){
    return view('home');})->name('home');

Route::get('/marca-consulta',function(){
    return view('MarcaConsulta');})->name('MarcaConsulta');

Route::get('/dados-pessoais',function(){
    return view('DadosPessoais');})->name('DadosPessoais');

Route::post('/logout', function () {
    session()->flush();
    return redirect()->route('login.form');
})->name('logout');