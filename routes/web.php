<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;


Route::group(['prefix' => 'dashboard','middleware' => 'auth'], function() {
    Route::get('/',[ AdminController::class, 'index' ])->name('admin.dashboard.index');

    Route::group(['prefix' => 'user'], function (){
        Route::get('/', [ UserController::class, 'index'])->name('user.index');
        Route::get('/create', [ UserController::class, 'create'])->name('user.create');
        Route::post('/', [ UserController::class, 'store'])->name('user.store');
        Route::get('/show/{slug}', [ UserController::class, 'show'])->name('user.show');
        Route::get('/edit/{slug}', [ UserController::class, 'edit'])->name('user.edit');
        Route::put('/update/{slug}', [ UserController::class, 'update'])->name('user.update');
        Route::get('/softdelete/{slug}',[ UserController::class, 'softdelete' ])->name('user.softdelete');
        Route::get('/delete/{slug}',[ UserController::class, 'destroy' ])->name('user.destroy');
        Route::get('/suspend/{slug}',[ UserController::class, 'suspend' ])->name('user.suspend');
    });
});



require __DIR__.'/auth.php';
