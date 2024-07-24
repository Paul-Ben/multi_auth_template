@extends('layouts.admin.adminDashboardLayout')
@section('content')
<div>
    <h1 class="text-3xl font-bold mb-8">User Management</h1>
            
            <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h2 class="text-2xl font-semibold mb-4">Select Session and Semester</h2>
                <form action="#" method="POST" class="mb-6">
                    <div class="flex space-x-4">
                        <div class="flex-1">
                            <label for="session" class="block text-sm font-medium text-gray-700 mb-2">Academic Session</label>
                            <select id="session" name="session" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                <option value="2023-2024">2023-2024</option>
                                <option value="2022-2023">2022-2023</option>
                                <option value="2021-2022">2021-2022</option>
                            </select>
                        </div>
                        <div class="flex-1">
                            <label for="semester" class="block text-sm font-medium text-gray-700 mb-2">Semester</label>
                            <select id="semester" name="semester" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                <option value="Fall">Fall</option>
                                <option value="Spring">Spring</option>
                                <option value="Summer">Summer</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">View Results</button>
                </form>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-semibold">Semester Results</h2>
                    <button onclick="window.print()" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">Print Results</button>
                </div>
                <div class="print-section">
                    <div class="mb-4 flex items-start">
                        <img alt="Student photo: Jane Doe, smiling young woman with long brown hair" src="{{asset('headshot/AdobeStock_195490756_Preview.jpeg')}}" class="w-32 h-32 object-cover rounded-lg mr-6" width="128" height="128">
                        <div>
                            <h3 class="text-xl font-semibold">Jane Doe</h3>
                            <p>Student ID: 12345678</p>
                            <p>Program: BSc Web Simulation</p>
                            <p>Year: 3</p>
                            <p>Session: 2023-2024</p>
                            <p>Semester: Fall</p>
                        </div>
                    </div>
                    <table class="w-full mb-4">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="p-2 text-left">Name</th>
                                <th class="p-2 text-left">Email</th>
                                <th class="p-2 text-left">Role</th>
                                <th class="p-2 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $index => $user)
                            <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : '' }}"> 
                                <td class="p-2">{{$user->name}}</td>
                                <td class="p-2">{{$user->email}}</td>
                                <td class="p-2">{{$user->role}}</td>
                                <td class="p-2">
                                    <a href="#">
                                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200">
                                            Edit
                                        </span>
                                    </a>
                                    <a href="#">
                                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-red-600 bg-blue-200">
                                            Delete
                                        </span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                    <div class="mt-4 p-4 text-white">
                        {{ $users->links('pagination::tailwind')}}
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h2 class="text-2xl font-semibold mb-4">Academic Progress</h2>
                <div class="relative pt-1">
                    <div class="flex mb-2 items-center justify-between">
                        <div>
                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200">
                                Progress
                            </span>
                        </div>
                        <div class="text-right">
                            <span class="text-xs font-semibold inline-block text-blue-600">
                                75%
                            </span>
                        </div>
                    </div>
                    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-blue-200">
                        <div style="width:75%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500"></div>
                    </div>
                </div>
                <p class="text-gray-700">You have completed 90 out of 120 required credits for your degree.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h2 class="text-2xl font-semibold mb-4">Academic Achievements</h2>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Dean's List - Fall 2022</li>
                    <li>Outstanding Project in Web Simulation - Spring 2023</li>
                    <li>AI Innovation Award - Summer 2023</li>
                </ul>
            </div>

            <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4" role="alert">
                <p class="font-bold">Need assistance?</p>
                <p>If you have any questions about your academic results or need advice on improving your performance, please contact your academic advisor or the Student Services office at <a href="mailto:studentservices@websim.institute" class="underline">studentservices@websim.institute</a>.</p>
            </div>
</div>

@endsection