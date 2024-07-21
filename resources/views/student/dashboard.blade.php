@extends('layouts.student.studentDashboardLayout')
@section('content')
    <div>
        <h1 class="text-3xl font-bold mb-8">Welcome, {{ Auth::user()->name }}!</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Quick Links</h2>
                <ul class="space-y-2">
                    <li><a href="/fees" class="text-blue-600 hover:underline">View Fee Statement</a></li>
                    <li><a href="/course-registration" class="text-blue-600 hover:underline">Register for
                            Courses</a></li>
                    <li><a href="/results" class="text-blue-600 hover:underline">Check Latest Results</a></li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Important Notices</h2>
                <ul class="space-y-2">
                    <li class="text-red-600">Course registration deadline: May 20, 2023</li>
                    <li class="text-green-600">New accommodation options available</li>
                    <li>Update your bio data for the new semester</li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Upcoming Events</h2>
                <ul class="space-y-2">
                    <li>
                        <span class="font-semibold">May 15:</span> Virtual Career Fair
                    </li>
                    <li>
                        <span class="font-semibold">May 22:</span> Student Council Elections
                    </li>
                    <li>
                        <span class="font-semibold">June 1:</span> Summer Session Begins
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-8">
            <h2 class="text-2xl font-semibold mb-4">Recent Activity</h2>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <ul class="space-y-4">
                    <li class="flex items-center">
                        <div class="bg-blue-100 p-3 rounded-full mr-4">
                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold">Fees payment confirmed</p>
                            <p class="text-sm text-gray-600">2 hours ago</p>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold">New document uploaded: Transcript</p>
                            <p class="text-sm text-gray-600">1 day ago</p>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <div class="bg-yellow-100 p-3 rounded-full mr-4">
                            <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold">Course registration reminder</p>
                            <p class="text-sm text-gray-600">3 days ago</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
