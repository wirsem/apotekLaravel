<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController, HomeController, HomeUserController, DrugController, SupplierController, TransactionController};

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
Route::middleware(['alreadyLogged'])->group(function () {
	Route::get('/', [UserController::class, 'login']);
	Route::get('/login', [UserController::class, 'login'])->name('login');
	Route::post('/logged', [UserController::class, 'logged']);
	Route::get('/register', [UserController::class, 'register']);
	Route::post('/registered', [UserController::class, 'registered']);
});
Route::middleware(['AdminMiddleware'])->group(function () {
	Route::get('/logout', [UserController::class, 'logout']);
	Route::get('/home', [HomeController::class, 'index']);
	Route::get('/drug', [DrugController::class, 'index']);
	Route::get('/drugUser', [DrugController::class, 'indexUser']); // Drug User Route
	Route::get('/drug/show/{drug:id}', [DrugController::class, 'show']);
	Route::get('/drug/add', [DrugController::class, 'add']);
	Route::post('/drug/store', [DrugController::class, 'store']);
	Route::get('/drug/edit/{drug:id}', [DrugController::class, 'edit']);
	Route::put('/drug/update/{drug:id}', [DrugController::class, 'update']);
	Route::delete('/drug/delete/{drug:id}', [DrugController::class, 'delete']);

});
Route::middleware(['isLogged'])->group(function () {
	Route::get('/logout', [UserController::class, 'logout']);
	Route::get('/homeuser', [HomeUserController::class, 'indexUser']); // Home User Route
	Route::get('/drug', [DrugController::class, 'index']);
	Route::get('/drugUser', [DrugController::class, 'indexUser']); // Drug User Route
	Route::get('/drug/show/{drug:id}', [DrugController::class, 'show']);
	Route::get('/kontak', [UserController::class, 'kontak']); // Kontak Kami Route
	Route::get('/praktikdokter', [UserController::class, 'praktikDokter']); // Praktik Dokter Kami Route
});
















