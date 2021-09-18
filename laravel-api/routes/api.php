<?php

Use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

 

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//LOGIN
Route::post('usuarios/login', 'App\Http\Controllers\UsuarioController@login');


//USUARIOS
Route::post('usuariosall', 'App\Http\Controllers\UsuarioController@index01');
Route::get('usuarios/{usuario}', 'App\Http\Controllers\UsuarioController@show');
Route::post('usuarios', 'App\Http\Controllers\UsuarioController@store');
Route::patch('usuarios/{usuario}', 'App\Http\Controllers\UsuarioController@update');
Route::delete('usuarios/{usuario}', 'App\Http\Controllers\UsuarioController@delete');


//PERFIL
Route::get('perfils', 'App\Http\Controllers\PefilsController@indexperfils');

//TIPO DE DOCUMENTO
Route::get('tipdoc', 'App\Http\Controllers\TdocumentosController@indextdocumentos');

//TIPO DE ESTADO
Route::get('tipest', 'App\Http\Controllers\TestadosController@indextestados');

//TIPO DE TRANSACCION
Route::get('tiptra', 'App\Http\Controllers\transaccionesController@indexttransacciones');

//TIPO DE PAGO
Route::get('tippag', 'App\Http\Controllers\pagosController@indextpagos');

//CUENTAS
Route::post('cuentasall', 'App\Http\Controllers\CuentasController@index01');
Route::get('cuentas/{cuenta}', 'App\Http\Controllers\CuentasController@show');
Route::post('cuentas', 'App\Http\Controllers\CuentasController@store');
Route::patch('cuentas01/{cuenta}', 'App\Http\Controllers\CuentasController@update01');
//Route::delete('usuarios/{usuario}', 'App\Http\Controllers\UsuarioController@delete');

//MOVIMIENTOS
Route::post('cuentasall02', 'App\Http\Controllers\CuentasController@index02');
Route::post('movimientos', 'App\Http\Controllers\MovimientosController@insert01');
Route::post('movimientosall01', 'App\Http\Controllers\MovimientosController@index01');
Route::delete('movimientos01/{cuenta}', 'App\Http\Controllers\MovimientosController@delete01');
Route::post('movimientosTot01', 'App\Http\Controllers\MovimientosController@index02');
Route::patch('movimientos01', 'App\Http\Controllers\MovimientosController@update02');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
