<?php


use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function() //regoup all the rout with the name admin
{
  Route::resource('proprety',App\Http\Controllers\Admin\PropertyController::class)->except('show');
});
