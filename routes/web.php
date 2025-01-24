<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\ReservaController;
//Web
use App\Http\Controllers\web\WebController;

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

Route::get('/login', function () {
    return redirect()->route('admin.login.get');
});

// ! admin 

Route::get('/administrador', [AuthController::class, 'showLoginForm'])->name('admin.login.get');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login');
Route::get('/admin_logout', [AuthController::class, 'logout'])->name('admin.logout');
Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'auth:admins'], function () {
        /*=============================== Usuarios Registrados =========================================================*/
        Route::get('/home', [HomeController::class, 'index'])->name('home.index');
        /*=============================== Reservas =========================================================*/
        Route::get('/entrante', [ReservaController::class, 'entrantes'])->name('reservacion.entrantes');
        Route::get('/finalizada', [ReservaController::class, 'finalizadas'])->name('reservacion.finalizadas');
        Route::get('/rechazada', [ReservaController::class, 'rechazadas'])->name('reservacion.rechazadas');
        Route::get('/enviado/{id}', [ReservaController::class, 'confirmarReserva'])->name('reservacion.enviada');
        Route::get('/rechazado/{id}', [ReservaController::class, 'rechazarReserva'])->name('reservacion.rechazada');
    });
});



Route::get('/', [WebController::class, 'index'])->name('web.index');
Route::post('/reserva', [WebController::class, 'reservaStore'])->name('reserva.store');

Route::get('/habitaciones', function () {
    return view('web.habitaciones.habitaciones');
});
Route::get('/habitaciones02', function () {
    return view('web.habitaciones.habitaciones02');
});
Route::get('/habitaciones03', function () {
    return view('web.habitaciones.habitaciones03');
});
Route::get('/habitaciones04', function () {
    return view('web.habitaciones.habitaciones04');
});
Route::get('/habitaciones05', function () {
    return view('web.habitaciones.habitaciones05');
});

Route::get('/instalaciones', function () {
    return view('web.instalaciones.index');
});

Route::get('/contactenos', function () {
    return view('web.contactenos.index');
});
