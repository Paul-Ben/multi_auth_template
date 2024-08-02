@extends('layouts.admin.adminDashboardLayout')
@section('content')
    <div>
        <h1 class="text-3xl font-bold mb-8">Session Management</h1>
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
                <h2 class="text-2xl font-semibold mb-4">Add Session</h2>
                <div>
                    <a href="{{ route('studysession.index') }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">Back
                        </a>
                </div>
            </div>

            <form action="{{ route('studysession.store') }}" method="POST" class="mb-6">
                @csrf
                <div class="flex space-x-4">
                    <div class="flex-1">
                        <label for="session" class="block text-sm font-medium text-gray-700 mb-2">Session Name</label>
                        <input type="text" name="name" id="name" placeholder="Example: 2021/2022"
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                    </div>
                    <div class="flex-1">
                        <label for="start_date" class="block text-sm font-medium text-gray-700 mb-2">Start Date</label>
                        <input type="date" name="start_date" id="start_date"
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">

                    </div>
                    <div class="flex-1">
                        <label for="end_date" class="block text-sm font-medium text-gray-700 mb-2">End Date</label>
                        <input type="date" name="end_date" id="end_date"
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">

                    </div>
                    <div class="flex-1">
                        <label for="semester" class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                        <select name="status" id="status"
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                            <option value="0">Inactive</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>
                <button type="submit"
                    class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">Add
                    Session
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
