<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, "home"])
    ->name('home');
Route::get('/menu', [\App\Http\Controllers\HomeController::class, "menu"])
    ->name('menu');
Route::get('/nosotros', [\App\Http\Controllers\HomeController::class, "about"])
    ->name('about');

Route::get('/registro', [\App\Http\Controllers\AuthController::class, "registerForm"])
    ->name('auth.register.form');
Route::post('/registro', [\App\Http\Controllers\AuthController::class, "registerProcess"])
    ->name('auth.register.process');
Route::get('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, "loginForm"])
    ->name('auth.login.form');
Route::post('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, "loginProcess"])
    ->name('auth.login.process');
Route::post('/cerrar-sesion', [\App\Http\Controllers\AuthController::class, "logoutProcess"])
    ->name('auth.logout.process');

Route::get('/novedades', [\App\Http\Controllers\NewsController::class, "index"])
    ->name('news.index');
Route::get('/novedades/{id}', [\App\Http\Controllers\NewsController::class, "view"])
    ->name('news.view')
    ->whereNumber('id');

Route::middleware('auth')->group(function () {
    Route::get('/reservar', [\App\Http\Controllers\ReservationController::class, 'createForm'])
        ->name('reservations.create.form');
    Route::post('/reservar', [\App\Http\Controllers\ReservationController::class, 'createProcess'])
        ->name('reservations.create.process');
});

Route::middleware(['auth', \App\Http\Middleware\RoleMiddleware::class . ':admin'])->group(function () {
    Route::get('/novedades/publicar', [\App\Http\Controllers\NewsController::class, "createForm"])
        ->name('news.create.form');
    Route::post('/novedades/publicar', [\App\Http\Controllers\NewsController::class, "createProcess"])
        ->name('news.create.process');

    Route::get('/novedades/{id}/editar', [\App\Http\Controllers\NewsController::class, "editForm"])
        ->name('news.edit.form')
        ->whereNumber('id');
    Route::post('/novedades/{id}/editar', [\App\Http\Controllers\NewsController::class, "editProcess"])
        ->name('news.edit.process')
        ->whereNumber('id');

    Route::get('/novedades/{id}/eliminar', [\App\Http\Controllers\NewsController::class, "deleteForm"])
        ->name('news.delete.form')
        ->whereNumber('id');
    Route::post('/novedades/{id}/eliminar', [\App\Http\Controllers\NewsController::class, "deleteProcess"])
        ->name('news.delete.process')
        ->whereNumber('id');

    Route::get('/admin/users', [\App\Http\Controllers\UserController::class, 'index'])
        ->name('admin.users.index');
    Route::get('/admin/users/{user}', [\App\Http\Controllers\UserController::class, 'show'])
        ->name('admin.users.show');
});