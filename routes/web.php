<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ManageApplicationController;
use App\Http\Controllers\Admin\ManageUsersController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\It\ItDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Student\StudentDashboardController;
use App\Http\Controllers\StudySessionController;
use App\Models\Course;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('application', ApplicationController::class);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    // User managment routes
    Route::get('admin/manage-user', [ManageUsersController::class, 'index'])->name('admin.manageuser');
    // Get the add user form
    Route::get('/admin/manage-user/create', [ManageUsersController::class, 'create'])->name('admin.createuser');
    // Post the add user form
    Route::post('admin/manage-user/add', [ManageUsersController::class, 'store'])->name('admin.adduser');

    Route::get('admin/manage-user/edit/{user}', [ManageUsersController::class, 'edit'])->name('admin.edit.user');
    Route::put('/admin/manage-user/{user}', [ManageUsersController::class, 'updateUser'])->name('admin.updateUser');
    Route::delete('/admin/manage-user/{user}', [ManageUsersController::class, 'destroy'])->name('admin.delete.user');
    // Application managment routes
    Route::get('admin/manage-application', [ApplicationController::class, 'index'])->name('admin.application');
    Route::get('admin/manage-application/{application}', [ManageApplicationController::class, 'viewApplication'])->name('admin.application-view');
    Route::get('admin/manage-application/{application}/edit', [ManageApplicationController::class, 'edit'])->name('admin.edit-application');
    Route::put('admin/manage-application/{application}', [ManageApplicationController::class, 'update'])->name('admin.update-application');
    Route::delete('admin/manage-application/{application}', [ManageApplicationController::class, 'destroy'])->name('admin.delete-application');
// Faculty, Department and Course managment routes
    Route::resource('faculty', FacultyController::class);
    Route::resource('department', DepartmentController::class);
    Route::resource('course', CourseController::class);
    Route::get('admin/get-department-courses', [CourseController::class, 'viewDepartmentCourses'])->name('viewDepartmentCourses');
    Route::get('/departments', [DepartmentController::class, 'getDepartments'])->name('getDepartments');
    Route::get('admin/view-all-courses', [CourseController::class, 'viewAllCourses'])->name('viewall');
    // StudySession Management routes
    Route::resource('studysession', StudySessionController::class);
});

// Student Routes
Route::middleware(['auth', 'student'])->group(function () {
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
Route::middleware(['auth', 'it'])->group(function () {
    Route::get('/it/dashboard', [ItDashboardController::class, 'index'])->name('it.dashboard');
});
require __DIR__ . '/auth.php';
