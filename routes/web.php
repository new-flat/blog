<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;


// ブログ一覧画面を表示
Route::get('/', [BlogController::class, 'showList'])->name('blogs');

// ブログ登録画面を表示
Route::get('/blog/create', [BlogController::class, 'showCreate'])->name('create');

// ブログ登録
Route::post('/blog/store', [BlogController::class, 'exeStore'])->name('store');

// ブログ詳細画面を表示
Route::get('/blog/{id}', [BlogController::class, 'showDetail'])->name('show');

//コメント投稿
Route::post('/blog/{id}/comment', [BlogController::class, 'storeComment'])->name('blog.comment');

// ブログ編集画面を表示
Route::get('/blog/edit/{id}',[BlogController::class, 'showEdit'])->name('edit');
Route::post('/blog/update', [BlogController::class, 'exeUpdate'])->name('update');

// ブログ削除
Route::post('/blog/delete/{id}', [BlogController::class, 'exeDelete'])->name('delete');

//新規ユーザー登録画面を表示
Route::get('/auth/registPage', [RegisteredUserController::class, 'create'])->name('registPage');

//新規ユーザー登録
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

//ログイン画面を表示
Route::get('/auth/loginPage', [ProfileController::class, 'showLogin'])->name('loginPage');

//ユーザーログイン
Route::post('/login', [ProfileController::class, 'exeLogin'])->name('login');

// **************
// Breezeの認証ルート
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
