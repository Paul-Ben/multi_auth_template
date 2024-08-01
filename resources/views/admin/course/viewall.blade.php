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
            <h2 class="text-2xl font-semibold">Application Records</h2>
            <div>
                <a href="{{ route('course.create')}}"
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">Add
                    Course</a>
                    <a href="{{ route('course.index')}}"
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">Back
                    </a>
            </div>
        </div>
        <div class="print-section">
            <table class="w-full mb-4">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-2 text-left">Course Code</th>
                        <th class="p-2 text-left">Course Title</th>
                        <th class="p-2 text-left" >Category</th>
                        <th class="p-2 text-left">Credit Unit</th>
                        <th class="p-2 text-left">Semester</th>
                        <th class="p-2 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($courses as $index => $course)
                         <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : '' }}">
                            <td class="p-2">{{ $course->courseCode }}</td>
                            <td class="p-2">{{ $course->courseTitle}} <br> {{$course->courseDescription}}</td>
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

                                    <form action="{{route('course.destroy', $course)}}" method="POST">
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
                    @empty
                    <tr>
                        <td colspan="6" class="text-center font-bold">No courses found</td>
                    </tr>
                    @endforelse
                
                </tbody>
            </table>
            <div class="mt-4 p-4 text-white">
                {{-- {{ $applications->links('pagination::tailwind') }} --}}
            </div>
        </div>
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

@endsection