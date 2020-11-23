<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursosController;

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

Route::get('/', function () {
    return view('Login/login');
});

//telas iniciais
Route::post('/login', [LoginController::class, 'authenticate'] );
Route::get('/dashboard', [LoginController::class, 'dashboard'] );
Route::get('/dashboard/alunos', [LoginController::class, 'dashboard'] );
Route::get('/dashboard/cursos', [LoginController::class, 'cursos_dashboard'] );

//routes para alunos
Route::get('/aluno/cadastrar', [AlunoController::class, 'form_aluno']);
Route::post('/aluno/cadastrar', [AlunoController::class, 'cadastrar_aluno']);
Route::get('/aluno/editar/{id}', [AlunoController::class, 'editar_form']);
Route::post('/aluno/editar/{id}', [AlunoController::class, 'editar_aluno']);
Route::delete('/aluno/remover/{id}', [AlunoController::class, 'remover_aluno']);

//routes para cursos
Route::get('/curso/cadastrar', [CursosController::class, 'form_curso']);
Route::post('/curso/cadastrar', [CursosController::class, 'cadastrar_curso']);
Route::get('/curso/editar/{id}', [CursosController::class, 'editar_form']);
Route::post('/curso/editar/{id}', [CursosController::class, 'editar_curso']);
Route::delete('/curso/remover/{id}', [CursosController::class, 'remover_curso']);

Route::post('/curso/import', [CursosController::class, 'import_xml']);
