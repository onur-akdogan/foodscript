<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\CategoryController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Contracts\LoginViewResponse;
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

Route::get('admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');
Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

//Cache Clean
    Route::get('/clear-cache', function () {
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('optimize');


        return redirect()->back();

    })->name('cacheClean');


    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.index');

    //Kategori işlemleri
    Route::get('/category/index',[CategoryController::class,'index'])->name('category.index');
    Route::get('/category/editPage/{id}',[CategoryController::class,'editPage'])->name('category.editPage');
    Route::Post('/category/update',[CategoryController::class,'update'])->name('category.update');
    Route::Post('/category/status/{id}',[CategoryController::class,'status'])->name('category.status');
    Route::get('/category/addPage',[CategoryController::class,'addPage'])->name('category.addPage');
    Route::post('/category/insert',[CategoryController::class,'insert'])->name('category.insert');
    Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');




});
