<?php

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

Route::get('/', [App\Http\Controllers\PagesController::class, 'home'])->name('home');

Route::get('/uppy', [App\Http\Controllers\PagesController::class, 'uppy'])->name('uppy');

Route::post('/upload-image', [App\Http\Controllers\PagesController::class, 'upload_image'])->name('upload-image');

Route::post('/save-register', [App\Http\Controllers\PagesController::class, 'save_register'])->name('saveregister');

Route::post('/save-identity', [App\Http\Controllers\PagesController::class, 'save_identity'])->name('saveidentity');

Route::get('/questions-reference', [App\Http\Controllers\PagesController::class, 'get_questions_reference'])->name('questionsreference');

Route::post('/validate-questions', [App\Http\Controllers\PagesController::class, 'validate_questions'])->name('validatequestions');

Route::post('/save-completed', [App\Http\Controllers\PagesController::class, 'save_completed'])->name('savecompleted');

Route::get('/finish', [App\Http\Controllers\PagesController::class, 'finish'])->name('finish');

Route::get('/login', [App\Http\Controllers\PagesController::class, 'login'])->name('login');

Route::post('/login-index', [App\Http\Controllers\PagesController::class, 'login_index'])->name('login_index');

Route::post('/create-token', [App\Http\Controllers\PagesController::class, 'create_token'])->name('create-token');

Route::get('/set_language/{lang}', [App\Http\Controllers\Controller::class, 'set_language'])->name('set_language');

Route::get('/get_state/{country}', [App\Http\Controllers\PagesController::class, 'get_state'])->name('get_state');

Route::get('/get_cities/{country}/{state}', [App\Http\Controllers\PagesController::class, 'get_cities'])->name('get_cities');
