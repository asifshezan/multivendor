<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;

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


    Route::group(['prefix' => 'brand'], function (){
        Route::get('/', [BrandController::class, 'index'])->name('brand.index');
        Route::get('/create', [BrandController::class, 'create'])->name('brand.create');
        Route::post('/', [BrandController::class, 'store'])->name('brand.store');
        Route::get('/show/{slug}', [BrandController::class, 'show'])->name('brand.show');
        Route::get('/edit/{slug}', [BrandController::class, 'edit'])->name('brand.edit');
        Route::put('/update/{slug}', [BrandController::class, 'update'])->name('brand.update');
        Route::get('/softdelete/{slug}', [BrandController::class, 'softdelete'])->name('brand.softdelete');
        Route::get('/delete/{slug}', [BrandController::class, 'delete'])->name('brand.delete');
        Route::get('/suspend/{slug}', [BrandController::class, 'suspend'])->name('brand.suspend');
    });


    Route::group(['prefix' => 'product'], function(){
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/', [ProductController::class, 'store'])->name('product.store');
        Route::get('/show/{slug}', [ProductController::class, 'show'])->name('product.show');
        Route::get('/edit/{slug}', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('/update/{slug}', [ProductController::class, 'update'])->name('product.update');
        Route::get('/softdelete/{slug}', [ProductController::class, 'softdelete'])->name('product.softdelete');
        Route::get('/delete/{slug}', [ProductController::class, 'delete'])->name('product.delete');
        Route::get('/suspend/{slug}', [ProductController::class, 'suspend'])->name('product.suspend');
    });
});



require __DIR__.'/auth.php';
