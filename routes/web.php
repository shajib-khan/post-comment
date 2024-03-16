<?php

use App\Livewire\Post;
use App\Livewire\SinglePost;
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

Route::get('/', Post::class)->name('show.post');
Route::get('post/{id}', SinglePost::class)->name('show.comment');
