<?php


use App\Http\Controllers\authcontroller;
use App\Http\Controllers\add_productcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewcontroller;

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



Route::get('/', [authcontroller::class, 'index'])->name('home');
Route::get('/login', [authcontroller::class, 'login_view'])->name('login');
Route::post('/login', [authcontroller::class, 'login']);
Route::get('/register', [authcontroller::class, 'register']);
Route::post('/register', [authcontroller::class, 'register_create'])->name('register');
Route::post('/storeproduct', [add_productcontroller::class, 'store'])->name('storeproduct');
Route::get('/view', [add_productcontroller::class, 'view'])->name('view');
Route::get('/product/delete/{id}', [viewcontroller::class, 'delete'])->name('delete');
Route::get('/product/edit/{id}', [viewcontroller::class, 'edit'])->name('edit');
Route::post('/update/{id}', [viewcontroller::class, 'update'])->name('update');
Route::get('/addprdouct', [authcontroller::class, 'addproductview'])->name('addproductview')->middleware('auth');
Route::get('/logout', [authcontroller::class, 'logout'])->name('logout')->middleware('auth');
