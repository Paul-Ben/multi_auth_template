<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Admin - Course Manager';
        $faculties = Faculty::all();
        $departments = Department::all();
        return view('admin.course.index', compact('title', 'faculties', 'departments'));
    }

    public function viewDepartmentCourses(Request $request)
    {
        $title = 'Admin - Department Course Manager';
        $courses = Course::where('department_id', $request->department_id)->where('semester', $request->semester)->where('level', $request->level)->get();
        // dd($courses);
        return view('admin.course.indexview', compact('title', 'courses'));
    }

    public function viewAllCourses()
    {
        $title = 'View All Courses';
        $courses = Course::all();
        return view('admin.course.viewall', compact('title', 'courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Admin - Course Create';
        $departments = Department::all();
        return view('admin.course.create', compact('title', 'departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'courseTitle' => 'required',
            'courseDescription' => 'required',
            'courseCode' => 'required',
            'courseLevel' => 'required',
            'courseCategory' => 'required',
            'courseCreditUnit' => 'required',
            'department_id' => 'required',
        ]);
        Course::create($request->all());
        return redirect()->route('course.index')->with('success', 'Course created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
