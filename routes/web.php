<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

// Show all posts (index)
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Show the form to create a new post (this is already set up in your index view)
Route::post('/posts', [PostController::class, 'save']);

// Show the edit form
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Update the post
Route::put('/posts/{id}', [PostController::class, 'update']);
  
// Delete a post
Route::delete('/posts/{id}', [PostController::class, 'delete']);
