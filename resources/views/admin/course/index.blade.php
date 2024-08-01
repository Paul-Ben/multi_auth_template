@extends('layouts.admin.adminDashboardLayout')
@section('content')
    <div>
        <h1 class="text-3xl font-bold mb-8">Application Management</h1>
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-semibold mb-4">Select Department and Semester</h2>
                <div>
                    <a href="{{ route('course.create') }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">Add
                        Course</a>
                        <a href="{{ route('viewall') }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">All Courses
                        </a>
                </div>
            </div>

            <form action="{{ route('viewDepartmentCourses') }}" method="GET" class="mb-6">
                @csrf
                <div class="flex space-x-4">
                    <div class="flex-1">
                        <label for="department_id" class="block text-sm font-medium text-gray-700 mb-2">Faculty</label>
                        <select id="faculty" name="department_id" required
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                            <option value="">Select Department</option>
                            @foreach ($faculties as $faculty)
                                <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex-1">
                        <label for="department_id" class="block text-sm font-medium text-gray-700 mb-2">Department</label>
                        <select id="department_id" name="department_id" required
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                            <option value="">Select Department</option>
                            {{-- @foreach ($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                    <div class="flex-1">
                        <label for="semester" class="block text-sm font-medium text-gray-700 mb-2">Semester</label>
                        <select id="semester" name="semester" required
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                            <option value="">Select Semester</option>
                            <option value="first">First Semester</option>
                            <option value="second">Second Semester</option>
                        </select>
                    </div>
                    <div class="flex-1">
                        <label for="semester" class="block text-sm font-medium text-gray-700 mb-2">Level</label>
                        <select id="semester" name="semester" required
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                            <option value="">Select Level</option>
                            <option value="100">100 Level</option>
                            <option value="200">200 Level</option>
                            <option value="200">300 Level</option>
                            <option value="200">400 Level</option>
                        </select>
                    </div>
                </div>
                <button type="submit"
                    class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">View
                    Results</button>
            </form>
        </div>

        {{-- <div class="bg-white p-6 rounded-lg shadow-md mb-8" hidden>
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-semibold">Application Records</h2>
            </div>
            <div class="print-section">
                <table class="w-full mb-4">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="p-2 text-left">Course Code</th>
                            <th class="p-2 text-left">Course Title</th>
                            <th class="p-2 text-left">Category</th>
                            <th class="p-2 text-left">Credit Unit</th>
                            <th class="p-2 text-left">Semester</th>
                            <th class="p-2 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $index => $course)
                            <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : '' }}">
                                <td class="p-2">{{ $course->courseCode }}</td>
                                <td class="p-2">{{ $course->courseTitle }} <br> {{ $course->courseDescription }}</td>
                                <td class="p-2">{{ $course->courseCategory }}</td>
                                <td class="p-2">{{ $course->courseCreditUnit }}</td>
                                <td class="p-2">{{ $course->semester }}</td>
                                <td class="p-2">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('course.show', $course) }}">
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200">
                                                View
                                            </span>
                                        </a>

                                        <a href="{{ route('course.edit', $course) }}">
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200">
                                                Edit
                                            </span>
                                        </a>

                                        <form action="{{ route('course.destroy', $course) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-red-600 bg-blue-200">
                                                Delete
                                                </span>
                                                </a>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4 p-4 text-white">
                 
                </div>
            </div>
        </div> --}}
        <div class="space-y-4"></div>
        <div class="mb-4"></div>

        {{-- <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-semibold mb-4">Academic Progress</h2>
            <div class="relative pt-1">
                <div class="flex mb-2 items-center justify-between">
                    <div>
                        <span
                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200">
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
                    <div style="width:75%"
                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500">
                    </div>
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
        </div> --}}

        <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4" role="alert">
            <p class="font-bold">Need assistance?</p>
            <p>If you have any questions about your academic results or need advice on improving your performance, please
                contact your academic advisor or the Student Services office at <a
                    href="mailto:studentservices@websim.institute" class="underline">studentservices@coe.institute</a>.
            </p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#faculty').on('change', function() {
            var facultyId = $(this).val();
            if (facultyId) {
                $.ajax({
                    url: '{{ route("getDepartments") }}',
                    type: 'GET',
                    data: { faculty_id: facultyId },
                    success: function(data) {
                        $('#department_id').empty().append('<option value="">Select Department</option>');
                        $.each(data, function(key, department) {
                            $('#department_id').append('<option value="' + department.id + '">' + department.name + '</option>');
                        });
                    }
                });
            } else {
                $('#department_id').empty().append('<option value="">Select Department</option>');
            }
        });
    });
</script>
@endsection
