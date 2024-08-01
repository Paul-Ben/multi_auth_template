<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Admin - Faculties';
        $faculties = Faculty::all();
        return view('admin.faculty.index', compact('faculties', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Admin - Create Faculty';
        return view('admin.faculty.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:faculties,name',
            'abbreviation' => 'required',
            ]);

            Faculty::create($request->all());
            return redirect()->route('faculty.index')->with('success', 'Faculty created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Faculty $faculty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faculty $faculty)
    {
        $title = 'Admin - Edit Faculty';
        return view('admin.faculty.edit', compact('faculty', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faculty $faculty)
    {
        $request->validate([
            'name' => 'required',
            'abbreviation' => 'required',
            ]);

            $faculty->update($request->all());
            return redirect()->route('faculty.index')->with('success', 'Faculty updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faculty $faculty)
    {
        $faculty->delete();
        return redirect()->route('faculty.index')->with('success', 'Faculty deleted successfully');
    }
}
