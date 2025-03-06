<?php

use App\Http\Controllers\RouteController;
use App\Http\Controllers\TailwickController;
use App\Http\Controllers\Web\AdminController;
use App\Http\Controllers\Web\ClientController;
use App\Http\Controllers\Web\JobController;
use App\Http\Controllers\Web\ProspetController;
use App\Http\Controllers\Web\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('index/{locale}', [TailwickController::class, 'lang']);

Route::get('/access-denied', function () {
    return view('denied.show');
})->name('access-denied');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'admin'])->group(function () {
    Route::resource('customers', ClientController::class);
    Route::resource('users', UserController::class)->only([
        'index',
        'show',
        'destroy'
    ]);
    Route::post('user/ratings', [UserController::class, 'rating'])->name('user.rating');
    Route::resource('admin', AdminController::class);
    Route::resource('jobs', JobController::class);
    Route::post('/job/visible/{id}', [JobController::class, 'opening'])->name('job.visible');
    Route::post('/job/hidden/{id}', [JobController::class, 'closing'])->name('job.hidden');
    Route::get('/setting/categorie', [AdminController::class, 'category'])->name('admin.category');
    Route::post('/setting/categorie/add', [AdminController::class, 'addcategory'])->name('category.add');
    Route::post('/setting/categorie/remove', [AdminController::class, 'removecategory'])->name('category.remove');

    Route::controller(ProspetController::class)->name('prospect.')->prefix('prospect')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('{id}', 'show')->name('show');
    });
    Route::get("/", [RouteController::class, 'index'])->name('dashboard');
    Route::get("{any}", [RouteController::class, 'routes']);
});


