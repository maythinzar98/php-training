<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoesController;
use App\Http\Controllers\SalesController;
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
Route::get('/',function(){
    return redirect()->route('Shoes.index');
});

//Shoes Table Function
Route::get('/shoes',[ShoesController::class,'ShowShoesTable'])->name('Shoes.index');
Route::get('/shoes/create',[ShoesController::class,'create'])->name('Shoes.create');
Route::post('/shoes',[ShoesController::class,'store'])->name('Shoes.store');
Route::get('/shoes/show/{id}',[ShoesController::class,'showShoesDetail'])->name('Shoes.showShoesDetail');
Route::get('/shoes/edit/{id}',[ShoesController::class,'ShoesEdit'])->name('Shoes.ShoesEdit');
Route::post('/shoes/{id}',[ShoesController::class,'update'])->name('Shoes.update');
Route::delete('/shoes/{id}',[ShoesController::class,'deleteShoes'])->name('Shoes.delete');

//Sales Table Function
Route::get('/sales',[SalesController::class,'ShowSalesTable'])->name('Sales.index');
Route::get('/sales/create',[SalesController::class,'create'])->name('Sales.create');
Route::post('/sales',[SalesController::class,'store'])->name('Sales.store');
Route::get('/sales/edit/{id}',[SalesController::class,'SalesEdit'])->name('Sales.SalesEdit');
Route::post('sales/{id}',[SalesController::class,'update'])->name('Sales.update');
Route::delete('/sales/{id}',[SalesController::class,'deleteSales'])->name('Sales.delete');

//Export Excel Function
Route::get('/export_excel', [ExportExcelController::class,'index']);
Route::get('/export_excel/excel', [ExportExcelController::class,'excel'])->name('export_excel.excel');