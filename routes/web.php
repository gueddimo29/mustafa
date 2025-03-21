<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\subscribersController;
use App\Http\Controllers\promotionsController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\reservationController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\messagesController;

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

Route::get('/',[homeController::class,'index']);
Route::post('/',[homeController::class,'subscribe']);
Route::get('/reservation', function () {
    return view('reservation');
});
Route::get('/storage-link',function(){
    $targetFolder = $_SERVER['DOCUMENT_ROOT'] .'/storage/app/public';
    $linkFolder =$_SERVER['DOCUMENT_ROOT'] . '/public/storage';
    symlink($targetFolder, $linkFolder);
    echo 'success';
});
Route::post('/reservation',[reservationController::class,'reserver']);

Route::get('/login', [loginController::class,'index']);
Route::post('/login', [loginController::class,'connect']);

Route::get('admin/subscribers',[subscribersController::class,'index']);
Route::get('unsubscribe/{email}',[subscribersController::class,'unsubscribe']);


Route::get('admin/promotions',[promotionsController::class,'index']);
Route::post('admin/addPromotion',[promotionsController::class,'add']);
Route::get('admin/deletePromotion/{id}',[promotionsController::class,'delete']);


Route::get('logout',[loginController::class,'logout'])->name('logout');
