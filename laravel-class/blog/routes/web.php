<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BladetempleteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FilehandalingController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/about',[HomeController::class,'about']);
Route::get('/contact',[HomeController::class,'contact']);

//name route

//Route::get('/product',[HomeController::class,'product'])->name('product.view');
//Route::get('/order',[HomeController::class,'order'])->name('order.view');
//Route::match(['get','post'],'/order',[HomeController::class,'order'])->name('order.view');

Route::any('/test',function(){
    return "any route page";
});


//parameter route

// Route::get('/product/{id}/{color}',function($id, $color){
//     return "product id ".$id ." color ".$color;
// });

//optional parameter

// Route::get('/product/{id?}/{color?}',function($id=0, $color='red'){
//     return "product id ".$id ." color ".$color;
// });

Route::prefix('admin')->group(function(){
    Route::get('/product',[HomeController::class,'product'])->name('product.view');
    Route::get('/order',[HomeController::class,'order'])->name('order.view');
});


//form handalling

Route::get('/student',[FilehandalingController::class,'index'])->name('stuent.form.view');
Route::post('/student/create',[FilehandalingController::class,'store'])->name('student.form.store');

//blade templete engine

Route::get('/home',[BladetempleteController::class,'index'])->name('home.view');
Route::get('/about',[BladetempleteController::class,'about'])->name('about.view');
Route::get('/contact',[BladetempleteController::class,'contact'])->name('contact.view');

//resource controller route
Route::resource('/product',\App\Http\Controllers\ProductController::class);

//card app
//middleware group
Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/student',[StudentController::class,'index'])->name('student.view');
    Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
    Route::post('/student',[StudentController::class,'store'])->name('student.store');
    Route::get('/student/{id}',[StudentController::class,'edit'])->name('student.edit');
    Route::put('/student/{id}',[StudentController::class,'update'])->name('student.update');
    Route::get('/student/delete/{id}',[StudentController::class,'destroy'])->name('student.destroy');

    Route::get('/student/view/{id}',[StudentController::class,'view'])->name('student.single.view');
    });

