<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NameController;
use App\Http\Controllers\BillController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/exercise', [NameController::class, 'index']);

//Route::get('/student', [StudentController::class, 'index'];)
//Route::get('/slug/{name}',fn($name) => str::slug($name);)


Route::get('/greet',function(){
    $name=request('name');
    $age =request('age');
    return compact('name','age');
});

Route::get('/user/{name}/{age}',function($name,$age){
    return compact('name','age');
});
Route::get('/name', [NameController::class,'index']);
Route::get('/bill', [BillController::class,'index']);
?>