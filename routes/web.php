<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FooterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Home\TopNavController;
use App\Http\Controllers\UploadImageController;

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

// TopNav
Route::resource('topnav', TopNavController::class);
// footer
Route::resource('footer', FooterController::class);
// slider
Route::group(['prefix' => 'slider'], function () {
    Route::get('/view', [UploadImageController::class, 'index'])->name('slider.view');
    Route::get('/edit/{id}', [UploadImageController::class, 'edit'])->name('slider.edit');
    Route::put('/update/{id}', [UploadImageController::class, 'update'])->name('slider.update');
});


Route::get('/payment', [HomeController::class, 'payment'])->name('payment');
Route::get('/bank', [HomeController::class, 'bank'])->name('bank');
Route::get('/soon', [HomeController::class, 'soon'])->name('soon');
Route::get('/article', [HomeController::class, 'article'])->name('article');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');


// Route::get('/upload', function(){
//     return view('upload');
// })->name('upload');

// Route::post('/uploadImage',[UploadImageController::class,'upload'])->name('uploadImage');
// Route::post('/uploadImageSectionRight',[VisionMessageRightController::class,'store'])->name('uploadImageSectionRight');
// Route::post('/uploadImageSectionLeft',[VisionMessageLeftController::class,'store'])->name('uploadImageSectionLeft');
// Route::post('/uploadImageLogo',[FooterController::class,'store'])->name('uploadImageLogo');




Route::get('/{page}', [AdminController::class, 'index']);
// Route::group(['middleware' => ['auth']], function () {
// });
