<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 'User') {
            return redirect()->route('dashboard');
        }

        if (Auth::user()->role == 'Admin') {
            return $next($request);
        }

        if (Auth::user()->role == 'IT') {
            return redirect()->route('it');
        }

        if (Auth::user()->role == 'Bursar') {
            return redirect()->route('bursary');
        }
        if (Auth::user()->role == 'AcademicOfficer') {
            return redirect()->route('academicOfficer');
        }
        if (Auth::user()->role == 'Student') {
            return redirect()->route('student');
        }
        if (Auth::user()->role == 'Teacher') {
            return redirect()->route('teacher');
        }
    }
}
