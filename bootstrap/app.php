<?php

use App\Http\Middleware\AcademicOfficer;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Bursar;
use App\Http\Middleware\IT;
use App\Http\Middleware\Student;
use App\Http\Middleware\Teacher;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->alias([
            'admin' => Admin::class,
            'academicOfficer' => AcademicOfficer::class,
            'bursar' => Bursar::class,
            'it' => IT::class,
            'student' => Student::class,
            'teacher' => Teacher::class,

        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
