<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminAuthorController;
use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\AdminBookAuthorController;
use App\Http\Controllers\AdminBookIssueController;

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

Route::view('/', 'welcome')->name('welcome');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('/user/dashboard', [UserController::class, 'showDashboard'])->middleware('auth', 'is_user')->name('user.dashboard');
Route::get('/user/{user}/books', [UserController::class, 'showBooks'])->middleware('auth', 'is_user')->name('user.books');

Route::get('/admin/dashboard', [AdminController::class, 'showDashboard'])->middleware(['auth', 'is_admin'])->name('admin.dashboard');

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/users', [AdminUserController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/create', [AdminUserController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users', [AdminUserController::class, 'store'])->name('admin.users.store');
    Route::get('/admin/users/{user}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{user}', [AdminUserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{user}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');
});

    Route::middleware(['auth', 'is_admin'])->group(function () {
        Route::get('/admin/authors', [AdminAuthorController::class, 'index'])->name('admin.authors.index');
        Route::get('/admin/authors/create', [AdminAuthorController::class, 'create'])->name('admin.authors.create');
        Route::post('/admin/authors', [AdminAuthorController::class, 'store'])->name('admin.authors.store');
        Route::get('/admin/authors/{author}/edit', [AdminAuthorController::class, 'edit'])->name('admin.authors.edit');
        Route::put('/admin/authors/{author}', [AdminAuthorController::class, 'update'])->name('admin.authors.update');
        Route::delete('/admin/authors/{author}', [AdminAuthorController::class, 'destroy'])->name('admin.authors.destroy');
});

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/books', [AdminBookController::class, 'index'])->name('admin.books.index');
    Route::get('/admin/books/create', [AdminBookController::class, 'create'])->name('admin.books.create');
    Route::post('/admin/books', [AdminBookController::class, 'store'])->name('admin.books.store');
    Route::get('/admin/books/{book}/edit', [AdminBookController::class, 'edit'])->name('admin.books.edit');
    Route::put('/admin/books/{book}', [AdminBookController::class, 'update'])->name('admin.books.update');
    Route::delete('/admin/books/{book}', [AdminBookController::class, 'destroy'])->name('admin.books.destroy');
});

Route::middleware(['auth', 'is_admin'])->group(function () {
Route::get('/admin/book_authors', [AdminBookAuthorController::class, 'index'])->name('admin.book_authors.index');
    Route::get('/admin/book_authors/create', [AdminBookAuthorController::class, 'create'])->name('admin.book_authors.create');
    Route::post('/admin/book_authors', [AdminBookAuthorController::class, 'store'])->name('admin.book_authors.store');
    Route::get('/admin/book_authors/{bookAuthor}/edit', [AdminBookAuthorController::class, 'edit'])->name('admin.book_authors.edit');
    Route::put('/admin/book_authors/{bookAuthor}', [AdminBookAuthorController::class, 'update'])->name('admin.book_authors.update');
    Route::delete('/admin/book_authors/{bookAuthor}', [AdminBookAuthorController::class, 'destroy'])->name('admin.book_authors.destroy');
});

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/book_issues', [AdminBookIssueController::class, 'index'])->name('admin.book_issues.index');
        Route::get('/admin/book_issues/create', [AdminBookIssueController::class, 'create'])->name('admin.book_issues.create');
        Route::post('/admin/book_issues', [AdminBookIssueController::class, 'store'])->name('admin.book_issues.store');
        Route::get('/admin/book_issues/{bookIssue}/edit', [AdminBookIssueController::class, 'edit'])->name('admin.book_issues.edit');
        Route::put('/admin/book_issues/{bookIssue}', [AdminBookIssueController::class, 'update'])->name('admin.book_issues.update');
        Route::delete('/admin/book_issues/{bookIssue}', [AdminBookIssueController::class, 'destroy'])->name('admin.book_issues.destroy');
    });