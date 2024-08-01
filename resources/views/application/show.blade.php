@extends('layouts.admin.adminDashboardLayout')
@section('content')
    <div>
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold">Application</h1>
            <div>
                <a href="{{ route('admin.application') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded no-print">Back</a>
                <button onclick="window.print()"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded no-print">
                    Print Application
                </button>
            </div>

        </div>

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 print-section">
            <div class="flex items-center justify-between mb-6">
                <img alt="WebSim Institute logo, a stylized 'W' made of interconnected nodes"
                    src="{{ asset('headshot/logo.png') }}" class="w-20 h-20" width="80" height="80">
                <h2 class="text-2xl font-bold">Student Application</h2>
            </div>

            <div class="flex mb-6">
                <div class="w-3/4 pr-4">
                    <div class="mb-4">
                        <span class="font-bold">Full Name: </span> {{ $application->firstName . ' ,' . $application->lastName }}
                    </div>
                    <div class="mb-4">
                        <span class="font-bold">Application ID:</span> {{ $application->applicationId }}
                    </div>
                    <div class="mb-4">
                        <span class="font-bold">Date of Birth: {{ $application->dateOfBirth }}</span> 
                    </div>
                    <div class="mb-4">
                        <span class="font-bold">Gender:</span> {{ $application->gender }}
                    </div>
                    <div class="mb-4">
                        <span class="font-bold">Email:</span> {{ $application->email }}
                    </div>
                    <div class="mb-4">
                        <span class="font-bold">Phone Number:</span> {{ $application->phoneNumber }}
                    </div>
                </div>
                <div class="w-1/4">
                    <img alt="Student photo, Jane Doe smiling at the camera"
                        src="{{ asset('headshot/AdobeStock_195490756_Preview.jpeg') }}" class="w-full h-auto rounded"
                        width="200" height="200">
                </div>
            </div>

            <div class="mb-4">
                <span class="font-bold">Address:</span> <p>{{ $application->address }}</p>
            </div>
            <div class="mb-4">
                <span class="font-bold">Program:</span> {{ $application->courseAppliedFor }}
            </div>
            <div class="mb-4">
                <span class="font-bold">State of Origin:</span> {{ $application->stateOfOrigin }}
            </div>

            <div class="mt-8 text-sm">
                <p>This document is officially generated by Institute. If you need to update any information, please contact
                    the administration office.</p>
                <p class="mt-2">Generated on: <span id="generated-date"></span></p>
            </div>
        </div>

        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mt-8 no-print" role="alert">
            <p class="font-bold">Important Note:</p>
            <p>Please ensure that all information provided is accurate and up-to-date. Any changes to your personal
                information should be reported to the administration office within 7 days.</p>
        </div>
    </div>
@endsection
