<?php



use App\Models\Post;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PostController;

Route::resource('posts', PostController::class);
