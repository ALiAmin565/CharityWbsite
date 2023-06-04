<?php

use App\Http\Controllers\AdminController;
use App\Models\TopNav;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\UploadImageController;
use App\Http\Controllers\VisionMessageRightController;
use App\Http\Controllers\VisionMessageLeftController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/payment', [HomeController::class, 'payment'])->name('payment');
Route::get('/bank', [HomeController::class, 'bank'])->name('bank');
Route::get('/soon', [HomeController::class, 'soon'])->name('soon');
Route::get('/article', [HomeController::class, 'article'])->name('article');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');


Route::get('/upload', function(){
    return view('upload');
})->name('upload');

Route::post('/uploadImage',[UploadImageController::class,'upload'])->name('uploadImage');


Route::post('/uploadImageSectionRight',[VisionMessageRightController::class,'store'])->name('uploadImageSectionRight');
Route::post('/uploadImageSectionLeft',[VisionMessageLeftController::class,'store'])->name('uploadImageSectionLeft');


Route::resource('invoices', InvoicesController::class);
Route::get('/{page}', [AdminController::class, 'index']);
// Route::group(['middleware' => ['auth']], function () {
// });
