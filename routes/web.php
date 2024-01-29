<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyCrudController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[MyCrudController::class, 'Home'])->name('Home');


Route::group(['prefix'=>'crud','as'=>'crud'], 

function(){
    Route::get('/create', [MyCrudController::class,'CreateData'])->name('createData');
    Route::get('/show', [MyCrudController::class,'ShowData'])->name('ShowData');
    Route::get('/edit', [MyCrudController::class,'EditData'])->name('editData');
    Route::post('/update', [MyCrudController::class,'UpdateData'])->name('updateData');
    Route::get('/delete', [MyCrudController::class,'DeleteData'])->name('deleteData');
});





