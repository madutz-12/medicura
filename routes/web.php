<?php
use App\Http\Controllers\DoctoreController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::resource('doctores', DoctoreController::class);

Route::get('/doctore', [DoctoreController::class, 'index'])->name('doctores.index');
Route::get('/doctore/create', [DoctoreController::class, 'create'])->name('doctores.create');

Route::get('/doctore/{doctore}', [DoctoreController::class, 'show'])->name('doctores.show');
//Route::get('/doctore/{doctore}', [DoctoreController::class, 'show'])->name('doctores.form');

Route::get('/doctore/edit/{doctore}', [DoctoreController::class, 'edit'])->name('doctores.edit');
Route::get('/doctore/destroy/{doctore}', [DoctoreController::class, 'destroy'])->name('doctores.destroy');

Route::post('/doctore', [DoctoreController::class, 'store'])->name('doctores.store');
Route::post('/doctore-edit/{doctore}', [DoctoreController::class, 'update'])->name('doctores.update');

