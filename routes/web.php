<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class, 'index']);

//skill
Route::get('/skill', [SkillController::class, 'index']);
Route::get('/skill/create', [SkillController::class, 'create']);
Route::post('/skill', [SkillController::class, 'store']);
Route::get('/skill/{skill}', [SkillController::class, 'show']);
Route::get('/skill/{skill}/edit', [SkillController::class, 'edit']);
Route::patch('/skill/{skill}', [SkillController::class, 'update']);
Route::delete('/skill/{skill}', [SkillController::class, 'destroy']);
