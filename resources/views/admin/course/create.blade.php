@extends('layouts.admin.adminDashboardLayout')
@section('content')
    <div>
        <main class="py-16">
            <div class="container mx-auto px-6">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <h2 class="text-3xl font-bold text-center mb-8">Course Creation</h2>
                <form action="{{ route('course.store') }}" method="POST" class="bg-white p-8 rounded-lg shadow-md space-y-6"
                    enctype="multipart/form-data">
                    @csrf

                    <!-- Personal Information Section -->
                    <div class="border border-gray-400 p-3 rounded">
                        <h3 class="text-xl font-semibold mb-4">Course Information</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="address" class="block text-sm font-medium text-gray-700">Department</label>
                                <select name="department_id" id="courseCategory"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md" required>
                                    <option value="">Select Department</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="courseLevel" class="block text-sm font-medium text-gray-700">Course
                                    Level</label>
                                <select name="courseLevel" id="courseLevel"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md" required>
                                    <option value="">Select Level</option>
                                    <option value="100">100 Level</option>
                                    <option value="200">200 Level</option>
                                    <option value="300">300 Level</option>
                                    <option value="400">400 Level</option>
                                </select>
                            </div>
                            <div>
                                <label for="courseCategory" class="block text-sm font-medium text-gray-700">Course
                                    Category</label>
                                <select name="courseCategory" id="courseCategory"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md" required>
                                    <option value="">Select Category</option>
                                    <option value="coreCourse">Core Course</option>
                                    <option value="elective">Elective</option>
                                </select>
                            </div>
                            <div>
                                <label for="courseCreditUnit" class="block text-sm font-medium text-gray-700">Credit
                                    Unit</label>
                                <input type="number" name="courseCreditUnit" id="courseCreditUnit"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md" required>
                            </div>
                            <div>
                                <label for="courseCode" class="block text-sm font-medium text-gray-700">Course Code</label>
                                <input type="text" id="appId" name="courseCode" id="applicationId"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md" required>
                            </div>
                            <div>
                                <label for="courseTitle" class="block text-sm font-medium text-gray-700">Course
                                    Title</label>
                                <input type="text" name="courseTitle" id="courseTitle"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md" required>
                            </div>
                            <div>
                                <label for="courseDescription" class="block text-sm font-medium text-gray-700">Course
                                    Description</label>
                                <input type="text" name="courseDescription" id="middleName"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                            </div>
                            <div>
                                <label for="gender" class="block text-sm font-medium text-gray-700">Course
                                    Lecturer</label>
                                <input type="text" name="courseLecturer" id="courseLecturer"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                            </div>
                            <div>
                                <label for="coursePrerequisites"
                                    class="block text-sm font-medium text-gray-700">Prerequisite</label>
                                <input type="text" name="coursePrerequisites" id="coursePrerequisites"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                            </div>
                            <div>
                                <label for="nationality" class="block text-sm font-medium text-gray-700">Semester</label>
                                <select name="semester" id="semester" class="mt-1 p-2 block w-full border border-gray-300 rounded-md" required>
                                    <option value="">Select Semester</option>
                                    <option value="first">First Semester</option>
                                    <option value="second">Second Semester</option>
                                </select>
                            </div>

                        </div>
                        <div class="text-center pt-3">
                            <button type="submit"
                                class="bg-blue-800 text-white py-2 px-6 rounded-full text-lg font-semibold hover:bg-blue-700 transition duration-300">Create
                                Course</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    </div>
@endsection
