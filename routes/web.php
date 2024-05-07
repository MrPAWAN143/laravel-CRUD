<?php

use App\Http\Controllers\BlogPost;
use Illuminate\Support\Facades\Route;


Route::get('/',[BlogPost::class,'IndexPage']);

Route::POST('/createPost',[BlogPost::class,'FormHandling']);

Route::get('/itemlist',[BlogPost::class,'ShowData']);

Route::get('/edit/{id}',[BlogPost::class,'EditPost']);

Route::get('/delete/{id}',[BlogPost::class,'DeletePost']);


Route::POST('/editdata',[BlogPost::class,'Editdata']);