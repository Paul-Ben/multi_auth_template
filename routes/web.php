<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\It\ItDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Student\StudentDashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes
Route::middleware(['auth', 'admin'])->group(function (){
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});

// Student Routes
Route::middleware(['auth', 'student'])->group(function (){
    Route::get('/student/dashboard', [StudentDashboardController::class, 'index'])->name('student.dashboard');
    Route::get('/student/fees', [StudentDashboardController::class, 'fee'])->name('student.fee');
    Route::get('/student/bio-data', [StudentDashboardController::class, 'biodataindex'])->name('student.biodata');
    Route::get('/student/other-payments', [StudentDashboardController::class, 'otherpaymentsindex'])->name('student.otherpayments');
    Route::get('/student/course-registration', [StudentDashboardController::class, 'courseregistrationindex'])->name('student.courseregistration');
    Route::get('/student/results', [StudentDashboardController::class, 'resultindex'])->name('student.result');
    Route::get('/student/accommodation', [StudentDashboardController::class, 'accommodationindex'])->name('student.accommodation');
    Route::get('/student/accommodation-apply', [StudentDashboardController::class, 'accommodationapplication'])->name('student.accommodationapplication');
    Route::get('/student/documents', [StudentDashboardController::class, 'documentsindex'])->name('student.documents');

});

// IT Routes
Route::middleware(['auth', 'it'])->group(function (){
    Route::get('/it/dashboard', [ItDashboardController::class, 'index'])->name('it.dashboard');
});
require __DIR__.'/auth.php';

