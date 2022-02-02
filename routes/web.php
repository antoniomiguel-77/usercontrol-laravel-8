<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
/**Views */
Route::get('/',[UserController::class,'index']);
Route::get('/listar',[UserController::class,'list']);
Route::post('/ver',[UserController::class,'show']);
/**End Views */

/**Action */
Route::post('/novo',[UserController::class,'store']);
Route::delete('/usuario.deletar',[UserController::class,'destroy']);
Route::post('/usuario.editar',[UserController::class,'edit']);
Route::put('/usuario.update',[UserController::class,'update']);
 
/**End Action */

/**Report */

Route::get('/relatorio',[UserController::class,'report']);
