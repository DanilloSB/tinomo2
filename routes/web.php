<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\master\LayoutController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PrestadorController;
use App\Http\Controllers\ContatosController;

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

//Route::get('/', function () {
  //  return view('welcome');
//});



Route::get('/', function() {
  return view('site.home');
})->name('site.home');

Route::get('/about', function() {
  return view('site.about');
})->name('site.about');

Route::get('/assessments', function() {
  return view('site.assessments');
})->name('site.assessments');

Route::get('/login', function() {
  return view('site.login');
})->name('site.login');

Route::get('/contact', function() {
  return view('site.contact');
})->name('site.contact');

Route::get('/cadcliente', function() {
  return view('site.cadcliente');
})->name('site.cadcliente');

Route::get('/cadprestadordeservico', function() {
  return view('site.cadprestadordeservico');
})->name('site.cadprestadordeservico');

Route::get('/homecliente', function() {
  return view('site.homecliente');
})->name('site.homecliente');

Route::get('/homeprestador', function() {
  return view('site.homeprestador');
})->name('site.homeprestador');

Route::get('/servico', function() {
  return view('site.servico');
})->name('site.servico');

Route::get('/buscarservico', function() {
  return view('site.buscarservico');
})->name('site.buscarservico');

Route::get('/contact/novo', [ContatosController::class, 'create'], function(){
  return view('site.contactnovo');
})->name('site.contactnovo');
Route::post('/contact/novo', [ContatosController::class, 'store'])->name('registrar_contato');

Route::get('/cadprestadordeservico/novo', [PrestadorController::class, 'create']);
Route::post('/cadprestadordeservico/novo', [PrestadorController::class, 'store'])->name('registrar_prestador');

Route::get('/cadcliente/novo', [ClienteController::class, 'create']);
Route::post('/cadcliente/novo', [ClienteController::class, 'store'])->name('registrar_cliente');


Route::post('/login/novo', [ClienteController::class, 'authenticate'])->name('login_user');
Route::get('/logout', [ClienteController::class, 'logout'])->name('logout_user');