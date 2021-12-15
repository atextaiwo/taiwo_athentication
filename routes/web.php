<?php

use App\Http\Controllers\AuthenticatedController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('backend.index');
})->name('dashboard');

route::get('index', [AuthenticatedController::class , 'index']);
route::get('/admin/profile', [AuthenticatedController::class , 'profile'])->name('profile');
route::get('/admin/profile/edit', [AuthenticatedController::class , 'edit'])->name('editprofile')
route::post('/admin/profile/update', [AuthenticatedController::class , 'update'])->name('updateprofile');
route::get('/admin/logout', [AuthenticatedController::class , 'logout'])->name('logout');