<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Admin - Departments';
        $faculties = Faculty::all();
        $departments = Department::all();
        return view('admin.department.index', compact('title', 'departments', 'faculties'));

    }
    public function getDepartments(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'faculty_id' => 'required|integer|exists:faculties,id'
        ]);

        // Retrieve departments based on the faculty_id
        $departments = Department::where('faculty_id', $request->faculty_id)->get();

        // Return the departments as a JSON response
        return response()->json($departments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Admin - Create Department';
        $faculties = Faculty::all();
        return view('admin.department.create', compact('title', 'faculties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'faculty_id' => 'required',
            ]);
            Department::create($request->all());
            return redirect()->route('department.index')->with('success', 'Department created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        $title = 'Admin - Edit Department';
        $faculties = Faculty::all();
        return view('admin.department.edit', compact('title', 'department', 'faculties'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        $request->validate([
            'name' => 'required',
            'faculty_id' => 'required',
            ]);
            $department->update($request->all());
            return redirect()->route('department.index')->with('success', 'Department updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('department.index')->with('success', 'Department deleted successfully');
    }
}
