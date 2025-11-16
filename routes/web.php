<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EduController;

Route::get('/', [EduController::class, 'home'])->name('home');
Route::get('/category/{major}', [EduController::class, 'category'])->name('category');
Route::get('/course/{slug}', [EduController::class, 'courseDetail'])->name('course.detail');
Route::get('/writers', [EduController::class, 'writers'])->name('writers');
Route::get('/writer/{slug}', [EduController::class, 'writerDetail'])->name('writer.detail');
Route::get('/about', [EduController::class, 'about'])->name('about');
Route::get('/popular', [EduController::class, 'popular'])->name('popular');
