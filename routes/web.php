<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PaisController;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('clients', ClientController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('rooms', RoomController::class);
Route::resource('registrations', RegistrationController::class);
Route::get('cambioestadoemployee', [EmployeeController::class, 'cambioestadoemployee'])->name('cambioestadoemployee');


// Route::get('/about', function () {
// return 'Acerca de nosotros';
// });

// Route::get('/user/{id}', function ($id) {
//     return 'ID de usuario: ' . $id;
// });

// Route::get('/contacto', function () {
// return 'Página de contacto';
// })->name('contacto');

// Route::get('/user/{id}', function ($id) {
//     return 'ID de usuario: ' . $id;
// })->where('id', '[0-9]{3}');

// Route::prefix('admin')->group(function () {
//     Route::post('/', function () {
//     return 'Panel de administración';
// });
// Route::post('/users', function () {
//     return 'Lista de usuarios';
// });
// });

