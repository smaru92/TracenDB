<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\PersonController;
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

//person
Route::get('/person', [PersonController::class, 'index']);
Route::get('/person/create', [PersonController::class, 'create']);
Route::post('/person', [PersonController::class, 'store']);
Route::get('/person/{person}', [PersonController::class, 'show']);
Route::get('/person/{person}/edit', [PersonController::class, 'edit']);
Route::patch('/person/{person}', [PersonController::class, 'update']);
Route::delete('/person/{person}', [PersonController::class, 'destroy']);
