<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\FixedPageController;

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\WebsiteSettingController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\UserController;
use \App\Http\Controllers\Backend\AdController;
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

    //Kullanıcı işlemleri

    Route::get('/user/list', [UserController::class, 'index'])->name("user.index");
    Route::get('/user/editPage/{id}', [UserController::class, 'editPage'])->name("user.editPage");
    Route::post('/user/edit/{id}', [UserController::class, 'edit'])->name("user.edit");
    Route::get('/user/create', [UserController::class, 'create'])->name("user.create");
    Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name("user.delete");
    Route::post('/user/insert', [UserController::class, 'insert'])->name("user.insert");


    //Post işlemleri
    Route::get('/post/index',[PostController::class,'index'])->name('post.index');
    Route::get('/post/editPage/{id}',[PostController::class,'editPage'])->name('post.editPage');
    Route::Post('/post/update/{post}',[PostController::class,'update'])->name('post.update');
    Route::Post('/post/status/{id}',[PostController::class,'status'])->name('post.status');
    Route::get('/post/addPage',[PostController::class,'addPage'])->name('post.addPage');
    Route::post('/post/insert',[PostController::class,'insert'])->name('post.insert');
    Route::get('/post/delete/{id}',[PostController::class,'delete'])->name('post.delete');

   //Sabit sayfa işlemler
   
Route::get('/fixedpage', [FixedPageController::class, 'index'])->name('fixedpage.index');
Route::get('/fixedpage/add', [FixedPageController::class, 'add'])->name('fixedpage.add');
Route::post('/fixedpage/post', [FixedPageController::class, 'store'])->name('fixedpage.postStore');
Route::post('/fixedpage/status/{id}', [FixedPageController::class, 'status'])->name('fixedpage.status');
Route::get('/fixedpage/delete/{id}', [FixedPageController::class, 'delete'])->name('fixedpage.delete');
Route::post('/fixedpage/edit/{id}', [FixedPageController::class, 'edit'])->name('fixedpage.edit');
Route::get('/fixedpage/editPage/{id}', [FixedPageController::class, 'editPage'])->name('fixedpage.editPage');

//Social Settings
Route::get('/social/settings', [SettingController::class, 'SocialSetting'])->name('social.setting');
Route::post('/social/update/{id}', [SettingController::class, 'UpdateSocial'])->name('social.update');
Route::get('/seo/setting/', [SettingController::class, 'SeoSetting'])->name('seo.setting');
Route::post('/seo/update/{seos}', [SettingController::class, 'UpdateSeo'])->name('seos.update');

    //ADS BACKEND
    Route::get('/list/ad', [AdController::class, 'ListAds'])->name('list.add');
    Route::get('/add/ads', [AdController::class, 'AddAds'])->name('add.ads');
    Route::post('/create/ads', [AdController::class, 'CreateAds'])->name('create.ads');
    Route::get('/edit/ad/{ads}', [AdController::class, 'EditAds'])->name('edit.ads');
    Route::post('/update/ad/{ad}', [AdController::class, 'UpdateAds'])->name('update.ads');
    Route::post('/update/ads/{ad}', [AdController::class, 'adsStatus'])->name('update.adsStatus');
    Route::get('/ad/delete/{ad}', [AdController::class, 'DeleteAds'])->name('delete.ads');


//Website Setting Settings
Route::get('/webiste/settings', [WebsiteSettingController::class, 'index'])->name('website.setting');
Route::post('/webiste/update/{websetting}', [WebsiteSettingController::class, 'Update'])->name('websetting.update');

});
//Comments
Route::post('/comments/post/{postid}', [CommentsController::class, 'AddComments'])->name('add.comments');
Route::get('/comments/openPost/{postid}', [CommentsController::class, 'OpenComments'])->name('open.comments');
Route::get('/comments', [CommentsController::class, 'adminCommentsindex'])->name("comments.index");
Route::post('/comments/active/{id}', [CommentsController::class, 'ActiveComments'])->name('active.comments');
Route::get('/comments/delete/{id}', [CommentsController::class, 'DeleteComments'])->name('delete.comments');
