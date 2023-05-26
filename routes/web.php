<?php

use App\Http\Controllers\Dashboard\CategoriesController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/',[HomeController::class , 'index']);

Route::get('/',[HomeController::class , 'news']);


Route::get('/dashboard',[DashboardController::class,'index']);

//Read
Route::get('/dashboard/categories',[CategoriesController::class,'index'])
        ->name('dashboard.categories.index');


// Create
Route::get('/dashboard/categories/create',[CategoriesController::class,'create'])
      ->name('dashboard.categories.create');

Route::post('/dashboard/categories',[CategoriesController::class,'store'])     
   ->name('dashboard.categories.store') ; 



// Update
Route::get('/dashboard/categories/{id}/edit',[CategoriesController::class,'edit'])
       ->name('dashboard.categories.edit') ;

Route::put('/dashboard/categories/{id}',[CategoriesController::class,'update'])
        ->name('dashboard.categories.update') ;

 
        

//Destroy
Route::delete('/dashboard/categories/{id}',[CategoriesController::class,'destroy'])
        ->name('dashboard.categories.destroy') ;        
      