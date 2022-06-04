<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PartnerController;

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


    Route::group(['prefix' => 'partner'], function(){
        Route::get('/', [ PartnerController::class, 'index'])->name('partner.index');
        Route::get('/create', [ PartnerController::class, 'create'])->name('partner.create');
        Route::post('/', [ PartnerController::class, 'store'])->name('partner.store');
        Route::get('/show/{slug}', [ PartnerController::class, 'show'])->name('partner.show');
        Route::get('/edit/{slug}', [ PartnerController::class, 'edit'])->name('partner.edit');
        Route::put('/update/{slug}', [ PartnerController::class, 'update'])->name('partner.update');
        Route::get('/softdelete/{slug}', [ PartnerController::class, 'softdelete'])->name('partner.softdelete');
        Route::get('/delete/{slug}', [ PartnerController::class, 'delete'])->name('partner.delete');
        Route::get('/suspend/{slug}',[ UserController::class, 'suspend' ])->name('user.suspend');
    });
});



require __DIR__.'/auth.php';
