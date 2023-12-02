<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('/auth/register');
// });

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user.index');

// ROTAS CASO DE USO USER
Route::get('/', function () {
    return redirect('/user');
});
// LISTAR USUÁRIOS
Route::get('/user', [UserController::class, 'index'])->name('user.index');
// FORMULÁRIO DE CRIAÇÃO DE USUÁRIO
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
// ARMAZENAR NOVO USUÁRIO
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
// FORMULÁRIO DE EDIÇÃO DE USUÁRIO
Route::get('/user/{id}', [UserController::class, 'edit'])->name('user.edit');
// ATUALIZAR USUÁRIO
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
// EXCLUIR USUÁRIO
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
// ROTAS CASO DE USO USER
