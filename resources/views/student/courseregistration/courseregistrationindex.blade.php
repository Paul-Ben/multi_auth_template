@extends('layouts.student.studentDashboardLayout')
@section('content')
    <div>
        <h1 class="text-3xl font-bold mb-8">Course Registration</h1>

        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-semibold mb-4">Registration Period</h2>
            <p class="text-lg text-gray-700 mb-2">Current Semester: Fall 2023</p>
            <p class="text-lg text-gray-700 mb-4">Registration Deadline: <span class="font-semibold text-red-600">August 31,
                    2023</span></p>
            <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4" role="alert">
                <p class="font-bold">Important:</p>
                <p>Please ensure you complete your course registration before the deadline to avoid late registration fees.
                </p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-semibold mb-4">Available Courses</h2>
            <form action="#" method="GET">
                <table class="w-full mb-4">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="p-2 text-left">Select</th>
                            <th class="p-2 text-left">Course Code</th>
                            <th class="p-2 text-left">Course Title</th>
                            <th class="p-2 text-left">Credits</th>
                            <th class="p-2 text-left">Instructor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-2"><input type="checkbox" name="courses[]" value="WS101"></td>
                            <td class="p-2">WS101</td>
                            <td class="p-2">Introduction to Web Simulation</td>
                            <td class="p-2">3</td>
                            <td class="p-2">Dr. Sarah Johnson</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="p-2"><input type="checkbox" name="courses[]" value="AI202"></td>
                            <td class="p-2">AI202</td>
                            <td class="p-2">Advanced AI Algorithms</td>
                            <td class="p-2">4</td>
                            <td class="p-2">Prof. Alan Turing</td>
                        </tr>
                        <tr>
                            <td class="p-2"><input type="checkbox" name="courses[]" value="VR303"></td>
                            <td class="p-2">VR303</td>
                            <td class="p-2">Virtual Reality Design</td>
                            <td class="p-2">3</td>
                            <td class="p-2">Dr. Maya Virtual</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="p-2"><input type="checkbox" name="courses[]" value="QC401"></td>
                            <td class="p-2">QC401</td>
                            <td class="p-2">Quantum Computing Fundamentals</td>
                            <td class="p-2">4</td>
                            <td class="p-2">Prof. Quantum Leap</td>
                        </tr>
                        <tr>
                            <td class="p-2"><input type="checkbox" name="courses[]" value="DS250"></td>
                            <td class="p-2">DS250</td>
                            <td class="p-2">Data Science for Web Simulation</td>
                            <td class="p-2">3</td>
                            <td class="p-2">Dr. Data Dynamo</td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200 pulse-animation">Register
                    Selected Courses</button>
                    
            </form>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-semibold">Registered Courses</h2>
                <button onclick="window.print()"
                    class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-200">Print
                    Registered Courses</button>
            </div>
            <div class="print-section">
                <div class="mb-4 flex items-center">
                    <img alt="Student photo, Jane Doe smiling" src="{{asset('headshot/AdobeStock_195490756_Preview.jpeg')}}" class="w-24 h-24 rounded-full mr-4"
                        width="96" height="96">
                    <div>
                        <h3 class="text-xl font-semibold">Jane Doe</h3>
                        <p>Student ID: 12345678</p>
                        <p>Program: BSc Web Simulation</p>
                        <p>Year: 3</p>
                    </div>
                </div>
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="p-2 text-left">Course Code</th>
                            <th class="p-2 text-left">Course Title</th>
                            <th class="p-2 text-left">Credits</th>
                            <th class="p-2 text-left">Instructor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-2">WS101</td>
                            <td class="p-2">Introduction to Web Simulation</td>
                            <td class="p-2">3</td>
                            <td class="p-2">Dr. Sarah Johnson</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="p-2">AI202</td>
                            <td class="p-2">Advanced AI Algorithms</td>
                            <td class="p-2">4</td>
                            <td class="p-2">Prof. Alan Turing</td>
                        </tr>
                        <tr>
                            <td class="p-2">VR303</td>
                            <td class="p-2">Virtual Reality Design</td>
                            <td class="p-2">3</td>
                            <td class="p-2">Dr. Maya Virtual</td>
                        </tr>
                    </tbody>
                </table>
                <div class="mt-4">
                    <p>Total Credits: 10</p>
                    <p>Registration Date: August 15, 2023</p>
                </div>
            </div>
        </div>

        <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4" role="alert">
            <p class="font-bold">Need assistance?</p>
            <p>If you have any questions about course registration or need academic advising, please contact your academic
                advisor or the Registrar's Office at <a href="mailto:registrar@websim.institute"
                    class="underline">registrar@institute.com</a>.</p>
        </div>
    </div>
@endsection
