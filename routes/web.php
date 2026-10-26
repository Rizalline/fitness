<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TableController;

Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/calendar', [CalendarController::class, 'index'])->name('admin.calendar');
Route::get('/form', [FormController::class, 'index'])->name('admin.form');
Route::get('/notification', [NotificationController::class, 'index'])->name('admin.notification');
Route::get('/table', [TableController::class, 'index'])->name('admin.table');
Route::get('/login', [LoginController::class, 'index'])->name('admin.login');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('landing.about');
Route::get('/blog', [BlogController::class, 'index'])->name('landing.blog');
Route::get('/contact', [ContactController::class, 'index'])->name('landing.contact');
Route::get('/course', [CourseController::class, 'index'])->name('landing.course');
Route::get('/feature', [FeatureController::class, 'index'])->name('landing.feature');
