<?php

use App\Http\Controllers\Auth\ActivationController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\PageController;
use App\http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;

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


// Route::view('/','index');
// Route::view('/home','home');
// Route::get('/header',[EventController::class,'index'])->name('header.trialpage');
// Route::view('/header','header.trialpage'); <-- does not work because didnt access controller
// Route::view('add','header.addEvent')->name('addEvent');
// Route::post('add', [EventController::class,'store'])->name('event.store');

// Route::get('edit/{event}',[EventController::class,'edit'])->name('event.edit');
// Route::patch('update/{event}',[EventController::class,'update'])->name('event.update');
// Route::delete('delete/{event}',[EventController::class,'destroy'])->name('event.delete');
// use php artisan route:list to check the new route names and adjust, you only need this code and the route above is not necessary

// Route::get('/',[PageController::class,'index']);
// Route::get('/jadwal',[PageController::class,'jadwalkuliah']);
// Route::get('/kontak',[PageController::class,'kontakteman']);

// Route::get('/student', [StudentController::class, 'index'])->name('index');
// Route::get('student/{student}', [StudentController::class,'edit'])->name('student.edit');
// Route::patch('update/{student}',[StudentController::class,'update'])->name('student.update');
// Route::delete('delete/{student}',[StudentController::class, 'destroy'])->name('student.destroy');

// Route::view("addStudent", 'student.addStudent')->name('student.create');
// Route::post("create", [StudentController::class,'store'])->name('student.store');
// Route::resource('student',StudentController::class);


Route::resource('event', EventController::class);
Route::get('/', function () {
    return redirect()->route('event.index');
});
Route::get('activate',[ActivationController::class,'activate'])->name('activate');

Route::group(['middleware'=>'admin','prefix' => 'admin','as'=>'admin.'], function(){
    Route::resource('user', UserController::class);
    Route::resource('event', \App\Http\Controllers\Admin\EventController::class);
});
Route::group(['middleware'=>'creator','prefix' => 'creator','as'=>'creator.'], function(){
    Route::resource('user', UserController::class);
    Route::resource('event', EventController::class);
});
Route::group(['middleware'=>'user','prefix' => 'user','as'=>'user.'], function(){
    Route::resource('user', \App\Http\Controllers\User\GuestController::class);

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
