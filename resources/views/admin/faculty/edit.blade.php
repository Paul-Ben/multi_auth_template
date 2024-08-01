@extends('layouts.admin.adminDashboardLayout')
@section('content')
    <div>
        <h1 class="text-3xl font-bold mb-8">Faculty Management</h1>
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-semibold mb-4">Update Faculty</h2>
            <form action="{{route('faculty.update', $faculty)}}" method="POST" class="mb-6">
                @csrf
                @method('PUT')
                <div class="flex space-x-4">
                    <div class="flex-1">
                        <label for="session" class="block text-sm font-medium text-gray-700 mb-2">Faculty Name</label>
                        <input type="text" name="name" id="name" value="{{$faculty->name}}" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                    </div>
                    <div class="flex-1">
                        <label for="semester" class="block text-sm font-medium text-gray-700 mb-2">Abbreviation</label>
                        <input type="text" name="abbreviation" id="abbreviation" value="{{$faculty->abbreviation}}" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">

                    </div>
                </div>
                <button type="submit"
                    class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">Update Faculty
                    </button>
            </form>
        </div>

        <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4" role="alert">
            <p class="font-bold">Need assistance?</p>
            <p>If you have any questions about your academic results or need advice on improving your performance, please
                contact your academic advisor or the Student Services office at <a
                    href="mailto:studentservices@websim.institute" class="underline">studentservices@websim.institute</a>.
            </p>
        </div>
    </div>

    </div>
    @endsection