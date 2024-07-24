<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('application.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Application::where('applicationId', $request->applicationId)->exists()) {
            return redirect()->back()->with('message', 'This Application ID already exists. Try again.');
        }
        $valid_input = $request->validate([
            'applicationId' => 'required|unique:applications,applications',
            'firstName' => 'required',
            'lastName' => 'required|string',
            'email' => 'required|email|unique:applications,email',
            'olevel' => 'image|mimes:jpeg,png,jpg,svg|max:5048',
            'alevel'  => 'image|mimes:jpeg,png,jpg,svg|max:5048',
            'jamb'  => 'image|mimes:jpeg,png,jpg,svg|max:5048',
        ]);
        $input_data = $request->all();

        
            // Extract file uploads and handle them
            $this->handleFileUpload('olevel', 'images/olevel/', $input_data);
            $this->handleFileUpload('alevel', 'images/alevel/', $input_data);
            $this->handleFileUpload('jamb', 'images/jamb/', $input_data);
            
            Application::create($input_data);
        


        return redirect()->route('home')->with('success', 'Application submit Successful!');
    }

    private function handleFileUpload($field, $directory, &$data)
    {
       
        if ($file = request()->file($field)) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path($directory), $filename);
            $data[$field] = $filename;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        //
    }
}
