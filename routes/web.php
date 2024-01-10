<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KidController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;


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
    Route::get('testimoniallist', 'index');
    Route::get('deletetestimony/{id}', 'destroy');
    Route::get('trashedtestimony','trashed');
    Route::get('restoretestimony/{id}', 'restore');
    Route::get('fdtestimony/{id}', 'fdtestimony');
    Route::get('edittestimony/{id}', 'edit');
    Route::put('updatetestimony/{id}', 'update')->name('updateTestimonial');
})->middleware('verified');

//Route::get('testimonialpage',[ClientController::class, 'show']);


Route::prefix('admin')->controller(SubjectController::class)->group(function(){
    Route::get('addsubject', 'create');
    Route::post('subjectentry', 'store')->name('displaysubject');
    Route::get('subjectlist', 'index');
    Route::get('editsubject/{id}', 'edit');
    Route::put('updatesubject/{id}', 'update')->name('updatesubject');
    Route::get('deletesubject/{id}', 'destroy');
    Route::get('trashedsubject','trashed');
    Route::get('restoresubject/{id}', 'restore');
    Route::get('fdsubject/{id}', 'fdsubject');
})->middleware('verified');

//Route::get('subjectpage',[SubjectController::class, 'show']);

Route::prefix('admin')->controller(TeacherController::class)->group(function(){
    Route::get('addteacher', 'create');
    Route::post('teacherentry', 'store')->name('teacher');
    Route::get('teacherlist', 'index');
    Route::get('editteacher/{id}', 'edit');
    Route::put('updateteacher/{id}', 'update')->name('updateteacher');
    Route::get('deleteteacher/{id}', 'destroy');
    Route::get('trashedteacher','trashed');
    Route::get('restoreteacher/{id}', 'restore');
    Route::get('fdteacher/{id}', 'fdteacher');
})->middleware('verified');


Route::post('submit', [AppointmentController::class, 'appointment'])->name('submit');

Route::prefix('admin')->controller(AppointmentController::class)->group(function(){
    Route::get('appointmentlist', 'index');
    Route::get('showappointment/{id}', 'show');
    Route::get('trashedappointment','trashed');
    Route::get('restoreappointment/{id}', 'restore');
    Route::get('deleteappointment/{id}', 'destroy');
    Route::get('fdappointment/{id}', 'fdappointment');
})->middleware('verified');

Route::post('submit', [ContactController::class, 'contact'])->name('send');
