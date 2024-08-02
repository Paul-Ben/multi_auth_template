@extends('layouts.admin.adminDashboardLayout')
@section('content')
    <div>
        <h1 class="text-3xl font-bold mb-8">Course Management</h1>

        @if (Session::has('success'))
            <div>
                <div class="flex items-center p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-blue-800 dark:text-blue-300"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">Info alert!</span> {{ Session::get('success') }}
                    </div>
                </div>
            </div>
        @endif

        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-semibold mb-4">Select Faculty, Department, Semester and Level</h2>
                <div>
                    <a href="{{ route('course.create') }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">Add
                        Course</a>
                    <a href="{{ route('viewall') }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">All
                        Courses
                    </a>
                </div>
            </div>

            <form action="{{ route('viewDepartmentCourses') }}" method="GET" class="mb-6">
                @csrf
                <div class="flex space-x-4">
                    <div class="flex-1">
                        <label for="department_id" class="block text-sm font-medium text-gray-700 mb-2">Faculty</label>
                        <select id="faculty" name="faculty_id" required
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                            <option value="">Select Faculty</option>
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
                        <label for="level" class="block text-sm font-medium text-gray-700 mb-2">Level</label>
                        <select id="level" name="level" required
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
        <div class="space-y-4"></div>
        <div class="mb-4"></div>



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
                        url: '{{ route('getDepartments') }}',
                        type: 'GET',
                        data: {
                            faculty_id: facultyId
                        },
                        success: function(data) {
                            $('#department_id').empty().append(
                                '<option value="">Select Department</option>');
                            $.each(data, function(key, department) {
                                $('#department_id').append('<option value="' +
                                    department.id + '">' + department.name +
                                    '</option>');
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
