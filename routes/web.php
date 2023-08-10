<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

// Page controllers 
Route::get('/about', function () {
    return view('frontend.pages.about');
});

// Post controllers
Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class, 'show'])->name('blog');
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);
Route::get('register',  [RegisterController::class, 'create'])->middleware('guest');
Route::post('register',  [RegisterController::class, 'store'])->middleware('guest');
Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

// Admin
Route::middleware('can:admin')->group(function(){

    Route::resource('admin/posts', AdminPostController::class)->except('show');

    // Route::get('admin/posts/create', [AdminPostController::class, 'create']);
    // Route::post('admin/posts', [AdminPostController::class, 'store']);
    // Route::get('admin/posts', [AdminPostController::class, 'index']);
    // Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit']);
    // Route::patch('admin/posts/{post}', [AdminPostController::class, 'update']);
    // Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy']);
    
});


// Route::get('admin/posts/create', [AdminPostController::class, 'create'])->middleware('can:admin');
// Route::post('admin/posts', [AdminPostController::class, 'store'])->middleware('can:admin');
// Route::get('admin/posts', [AdminPostController::class, 'index'])->middleware('can:admin');
// Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->middleware('can:admin');
// Route::patch('admin/posts/{post}', [AdminPostController::class, 'update'])->middleware('can:admin');
// Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy'])->middleware('can:admin');


Route::middleware('can:admin')->group(function(){

    Route::resource('admin/categories', AdminCategoryController::class);

    // Route::get('admin/posts/create', [AdminPostController::class, 'create']);
    // Route::post('admin/posts', [AdminPostController::class, 'store']);
    // Route::get('admin/posts', [AdminPostController::class, 'index']);
    // Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit']);
    // Route::patch('admin/posts/{post}', [AdminPostController::class, 'update']);
    // Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy']);
    
});



//  Route::get('admin/categories', [AdminCategoryController::class, 'index']);
//  Route::get('admin/categories/create', [AdminCategoryController::class, 'create']);
//  Route::post('admin/categories', [AdminCategoryController::class, 'store']);
//  Route::get('admin/categories/{category}/edit', [AdminCategoryController::class, 'edit']);
//  Route::patch('admin/categories/{category}', [AdminCategoryController::class, 'update']);
//  Route::delete('admin/categories/{category}', [AdminCategoryController::class, 'destroy']);