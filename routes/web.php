<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KidController;
use App\Http\Controllers\ClientController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('kider',[KidController::class, 'index'])->name('index');

Route::get('page',[KidController::class, 'create']);

Route::get('about',[KidController::class, 'about'])->name('about');

Route::get('classes',[KidController::class, 'classes'])->name('classes');

Route::get('contact',[KidController::class, 'contact'])->name('contact');

Route::get('testimonial',[KidController::class, 'testimonial'])->name('testimonial');

Route::get('facilities',[KidController::class, 'facilities'])->name('facilities');

Route::get('team',[KidController::class, 'team'])->name('team');

Route::get('action',[KidController::class, 'action'])->name('action');

Route::get('appointment',[KidController::class, 'appointment'])->name('appointment');

Route::fallback([KidController::class, 'error404']);

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Route::controller(ClientController::class)->middleware('verified')->group(function(){
    Route::get('addtestimonial', 'create');
    Route::post('addtestimony', 'store')->name('displaytestimony');
});   */


//http://127.0.0.1:8001/admin/addtestimonial
Route::prefix('admin')->controller(ClientController::class)->group(function(){
    Route::get('addtestimonial', 'create');
    Route::post('addtestimony', 'store')->name('displaytestimony');
    //Route::get('testimonylist', 'index');
})->middleware('verified');

Route::get('testimonialpage',[ClientController::class, 'show']);
