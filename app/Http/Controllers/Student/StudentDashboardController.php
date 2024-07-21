<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentDashboardController extends Controller
{
    public function index() 
    {
        $title = 'Student Dashboard';
        return view('student.dashboard', ['title'=>$title]);
    }

    public function fee()
    {
        $title = 'Student Dashboard - Fee';
        return view('student.fee.feeindex', ['title'=>$title]);
    }

    public function biodataindex()
    {
        $title = 'Student Dashboard - Biodata';
        return view('student.biodata.biodataindex', ['title'=>$title]);
    }
    public function otherpaymentsindex()
    {
        $title = 'Student Dashboard - Other Payments';
        return view('student.otherpayments.otherpaymentsindex', ['title'=>$title]);
    }

    public function courseregistrationindex()
    {
        $title = 'Student Dashboard - Course Registration';
        return view('student.courseregistration.courseregistrationindex', ['title'=>$title]);
    }

    public function resultindex()
    {
        $title = 'Student Dashboard - Results';
        return view('student.results.resultsindex', ['title'=>$title]);
    }

    public function accommodationindex()
    {
        $title = 'Student Dashboard - Accommodation';
        return view('student.accommodation.accommodationindex', ['title'=>$title]);
    }

    public function accommodationapplication()
    {
        $title = 'Student Dashboard - Accommodation Apply';
        return view('student.accommodation.accommodationapplication', ['title'=>$title]);
    }

    public function documentsindex()
    {
        $title = 'Student Dashboard - My Documents';
        return view('student.documents.documentsindex', ['title'=>$title]);
    }
}
