<?php

namespace App\Http\Controllers;

use App\Models\StudySession;
use Illuminate\Http\Request;

class StudySessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Admin - Session';
        $studysessions = StudySession::orderBy('id', 'Desc')->paginate(10);
        // dd($studysessions);
        return view('admin.studysession.index', compact('studysessions', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Admin - Session Create';
        return view('admin.studysession.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:study_sessions,name',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required|boolean',
        ]);
        if ($validated['status']) {
            $otherActiveSession = StudySession::where('status', true)->first();

            if ($otherActiveSession) {
                // Update the other active session to inactive
                $otherActiveSession->update(['status' => false]);
            }
        }
        StudySession::create($request->all());
        return redirect()->route('studysession.index')->with('success', 'Session created');
    }

    /**
     * Display the specified resource.
     */
    public function show(StudySession $studySession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudySession $studysession)
    {
        $title = 'Admin -Session Edit';
        return view('admin.studysession.edit', compact('studysession', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudySession $studysession)
    {
        $validated = $request->validate([
            'name' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required|boolean',
        ]);
        if ($validated['status']) {
            $otherActiveSession = StudySession::where('status', true)
                ->where('id', '!=', $studysession->id)
                ->first();

            if ($otherActiveSession) {
                // Update the other active session to inactive
                $otherActiveSession->update(['status' => false]);
            }
        }
        $studysession->update($validated);
        return redirect()->route('studysession.index')->with('success', 'Session updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudySession $studysession)
    {
        $studysession->delete();
        return redirect()->route('studysession.index')->with('success', 'Session' . $studysession->name . ' deleted');
    }
}
