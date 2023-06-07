<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\Home\TopNavController;
use App\Http\Controllers\SectionLeftController;
use App\Http\Controllers\UploadImageController;
use App\Http\Controllers\SectionRightController;

use App\Http\Controllers\SuperController;

use App\Http\Controllers\ProplemController;

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



Route::group(['middleware' => ['auth']], function () {
// user
Route::resource('user', SuperController::class);
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
// blogs
Route::resource('blog', BlogController::class);

// sections
Route::resource('sectionleft',SectionLeftController::class);
Route::resource('sectionright',SectionRightController::class);



Route::get('/admin', [AdminController::class, 'index'])->name('index');

Route::post('proplem',[ProplemController::class, 'index'])->name('proplem');
Route::get('proplem',[ProplemController::class, 'get'])->name('get');
Route::get('proplem_show/{id}',[ProplemController::class, 'show'])->name('proplem_show');

});



// Route::get('/upload', function(){
//     return view('upload');
// })->name('upload');

// Route::post('/uploadImage',[UploadImageController::class,'upload'])->name('uploadImage');
// Route::post('/uploadImageSectionRight',[VisionMessageRightController::class,'store'])->name('uploadImageSectionRight');
// Route::post('/uploadImageSectionLeft',[VisionMessageLeftController::class,'store'])->name('uploadImageSectionLeft');
// Route::post('/uploadImageLogo',[FooterController::class,'store'])->name('uploadImageLogo');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home2');

Route::get('/payment', [HomeController::class, 'payment'])->name('payment');
Route::get('/bank', [HomeController::class, 'bank'])->name('bank');
Route::get('/soon', [HomeController::class, 'soon'])->name('soon');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blog.view');
Route::get('/blogsingle/{id}', [HomeController::class, 'singleBlog'])->name('blogsingle.view');
