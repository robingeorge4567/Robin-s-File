<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


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

Route::get('/',[PagesController::class,'index']);
Route::get('/index',[PagesController::class,'index']);
Route::post('/login',[PagesController::class,'login']);
Route::get('/home',[PagesController::class,'home'])->name('home');
Route::get('/projects',[PagesController::class,'projects'])->name('projects');
Route::get('/logout',[PagesController::class,'logout'])->name('logout');
Route::get('/add_project',[PagesController::class,'add_project']);
Route::get('/edit_project/{id}',[PagesController::class,'edit_project'])->name('edit_project');
Route::get('/edit_account/{id}',[PagesController::class,'edit_account'])->name('haccount.edit');
Route::post('/update/{id}',[PagesController::class,'update'])->name('update_project');
Route::post('/update_account/{id}',[PagesController::class,'update_account'])->name('update');
Route::get('/delete/{id}',[PagesController::class,'delete'])->name('delete');
Route::get('/delete_haccount/{id}',[PagesController::class,'delete_account'])->name('haccount.delete');
Route::post('/save',[PagesController::class,'save'])->name('insert_project');
Route::get('/haccounts',[PagesController::class,'haccounts'])->name('haccounts');
Route::get('/add_haccounts',[PagesController::class,'add_haccounts'])->name('add_haccounts');
Route::get('/profile/{id}',[PagesController::class,'profile'])->name('profile');
Route::post('/change_password/{id}',[PagesController::class,'change_password'])->name('change_password');
Route::post('/save_haccounts',[PagesController::class,'save_haccounts'])->name('insert');
