<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


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