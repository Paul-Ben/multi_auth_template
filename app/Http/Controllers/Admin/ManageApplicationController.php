<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class ManageApplicationController extends Controller
{
    public function viewApplication(Application $application)
    {
        $title = 'Admin - View Application';
        return view('application.show', compact('application', 'title'));
    }

    public function edit(Application $application)
    {
        $title = 'Admin - Edit Application';
        return view('admin.applicationmanager.applicationedit', compact('application', 'title'));
    }

    public function update(Application $application, Request $request)
    {
        $request->validate([
            'applicationId' => 'required',
            'firstName' => 'required',
            'lastName' => 'required|string',
            'email' => 'required|email',
        ]);
        $application->update($request->all());
        return redirect()->route('admin.application')->with('success', 'Application Updated');
    }

    public function destroy(Application $application)
    {
        $application->delete();
        return redirect()->route('admin.application')->with('success', 'Application Deleted');
    }
}
