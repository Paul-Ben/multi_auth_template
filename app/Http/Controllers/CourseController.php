<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
        $courses = Course::where('faculty_id',  $request->faculty_id)
            ->where('department_id', $request->department_id)
            ->where('semester', $request->semester)
            ->where('courseLevel', $request->level)->get();
        return view('admin.course.indexview', compact('title', 'courses'));
    }

    public function viewAllCourses()
    {
        $title = 'View All Courses';
        $courses = Course::paginate(10);
        return view('admin.course.viewall', compact('title', 'courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Admin - Course Create';
        $faculties = Faculty::all();
        $departments = Department::all();
        return view('admin.course.create', compact('title', 'departments', 'faculties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'courseTitle' => 'required',
            'courseDescription' => 'required',
            'courseCode' => 'required|unique:courses,courseCode',
            'courseLevel' => 'required',
            'courseCategory' => 'required',
            'courseCreditUnit' => 'required',
            'department_id' => 'required',
            'faculty_id' => 'required',
        ]);

        if ($validated) {
            Course::create($request->all());

            return redirect()->route('course.index')->with('success', 'Course created successfully');
        }

        return redirect()->back()->with('success', 'Course Code already exists.');
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
        $title = 'Admin -Edit Course';
        
        $faculties = Faculty::all();
        $departments = Department::all();
        return view('admin.course.edit', compact('title', 'course', 'departments', 'faculties'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'courseTitle' => 'required',
            'courseDescription' => 'required',
            'courseCode' => 'required',
            'courseLevel' => 'required',
            'courseCategory' => 'required',
            'courseCreditUnit' => 'required',
            'department_id' => 'required',
            'faculty_id' => 'required',
        ]);
        $course->update($request->all());
        return redirect()->route('course.index')->with('success', 'Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->back()->with('success', 'Course '.$course->courseCode.' deleted successfully');
    }
}
