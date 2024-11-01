<?php

use App\Http\Controllers\administrator\CMSController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Administrator\DashboardController;
use App\Http\Controllers\Administrator\NewsArchiveController;
use App\Http\Controllers\administrator\NewsCategoryController;
use App\Http\Controllers\Administrator\NewsController;
use App\Http\Controllers\Administrator\RoleController;
use App\Http\Controllers\administrator\PermissionController;
use App\Http\Controllers\Administrator\ProfileController;
use App\Http\Controllers\Administrator\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });


// Verifikasi Email Start

Route::get('/email/verify-email', [AuthController::class, 'notice'])->middleware(['auth','not.verified'])->name('verification.notice');
// halaman verif email hanya bisa diakses oleh user yg belum terverifikasi
// caranya buat custom middleware EnsureEmailIsNotVerified
// daftarkan not.verified di kernel.php

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/administrator');
})->middleware(['auth', 'signed'])->name('verification.verify');

// Verifikasi Email End

Route::prefix('administrator')->as('administrator.')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login');

    Route::middleware(['auth','verified'])->group(function () 
    {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware('permission:view-dashboard');

        //====Extras====//

        // Profile
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

        //====App Management====//

        // News
        Route::get('/news/list', [NewsController::class, 'index'])->name('news')->middleware('permission:view-news');
        Route::get('/news/list/create', [NewsController::class, 'create'])->name('news.create')->middleware('permission:create-news');
        Route::get('/news/list/{id}/edit', [NewsController::class, 'edit'])->name('news.edit')->middleware('permission:edit-news');
        Route::get('/news/list/{id}/detail', [NewsController::class, 'show'])->name('news.detail')->middleware('permission:detail-news');

        // News Category
        Route::get('/news/category', [NewsCategoryController::class, 'index'])->name('news.category')->middleware('permission:view-news-category');
        Route::get('/news/category/create', [NewsCategoryController::class, 'create'])->name('news.category.create')->middleware('permission:create-news-category');;

        // News Archive
        Route::get('/news/archive', [NewsArchiveController::class, 'index'])->name('news.archive')->middleware('permission:view-news-archive');

        // CMS
        Route::get('/cms', [CMSController::class, 'index'])->name('cms')->middleware('permission:view-cms');

        //====Account Management====//

        // User
        Route::get('/users', [UserController::class, 'index'])->name('users')->middleware('permission:view-users');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create')->middleware('permission:create-users');
        Route::get('/users/{id}/detail', [UserController::class, 'show'])->name('users.detail')->middleware('permission:detail-users');;
        Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit')->middleware('permission:edit-users');

        // Role
        Route::get('/roles', [RoleController::class, 'index'])->name('roles')->middleware('permission:view-roles');
        Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create')->middleware('permission:create-roles');
        Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit')->middleware('permission:edit-roles');

        // Permission
        Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions')->middleware('permission:view-permission');
        Route::get('/permissions/create', [PermissionController::class, 'create'])->name('permissions.create')->middleware('permission:create-permission');

    });
});

Route::get('/', [HomeController::class, 'index'])->name('home');
