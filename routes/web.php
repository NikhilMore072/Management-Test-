<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmerController;
use App\Models\Farmer;


Route::get('/xyz',function(){
    echo"This is the best";
});

Route::get('/',function(){
    return view('index');
});

Route::get('/visit', [FarmerController::class, 'index']);
Route::post('/visit', [FarmerController::class, 'store']);
Route::get('/visit/view',[FarmerController::class,'view']);
Route::get('/visit/delete/{id}',[FarmerController::class,'delete'])->name('farmer.delete');
Route::get('/visit/edit/{id}',[FarmerController::class,'edit'])->name('farmer.edit');
Route::post('/visit/update/{id}',[FarmerController::class,'update'])->name('farmer.update');


