@extends('layouts.admin.adminDashboardLayout')
@section('content')
    <div>
        <h1 class="text-3xl font-bold mb-8">User Management</h1>
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        {{-- <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-semibold mb-4">Select Session and Semester</h2>
            <form action="#" method="POST" class="mb-6">
                <div class="flex space-x-4">
                    <div class="flex-1">
                        <label for="session" class="block text-sm font-medium text-gray-700 mb-2">Academic Session</label>
                        <select id="session" name="session"
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                            <option value="2023-2024">2023-2024</option>
                            <option value="2022-2023">2022-2023</option>
                            <option value="2021-2022">2021-2022</option>
                        </select>
                    </div>
                    <div class="flex-1">
                        <label for="semester" class="block text-sm font-medium text-gray-700 mb-2">Semester</label>
                        <select id="semester" name="semester"
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                            <option value="Fall">Fall</option>
                            <option value="Spring">Spring</option>
                            <option value="Summer">Summer</option>
                        </select>
                    </div>
                </div>
                <button type="submit"
                    class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">View
                    Results</button>
            </form>
        </div> --}}

        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-semibold">User Record</h2>
                <form action="{{ route('admin.searchuser') }}" class="max-w-md mx-auto">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search" name="query"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Search..." required />
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>
                <div>
                    <a href="{{ route('admin.createuser') }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">Add
                        User</a>
                    @if (isset($query) && $query != '')
                        <a href="{{ route('admin.manageuser') }}"
                            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">Clear
                        </a>
                    @endif

                </div>

            </div>
            <div class="print-section">
                <table class="w-full mb-4">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="p-2 text-left">Name</th>
                            <th class="p-2 text-left">Email</th>
                            <th class="p-2 text-left" hidden>Role ID</th>
                            <th class="p-2 text-left">Role</th>
                            <th class="p-2 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($query) && $query != '')
                            @if ($users->count() > 0)
                                @foreach ($users as $index => $user)
                                    <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : '' }}">
                                        <td class="p-2">{{ $user->name }}</td>
                                        <td class="p-2">{{ $user->email }}</td>
                                        <td class="p-2" hidden>{{ $user->roleId }}</td>
                                        @if ($user->roleId == 1)
                                            <td class="p-2">Admin</td>
                                        @endif
                                        @if ($user->roleId == 2)
                                            <td class="p-2">Student</td>
                                        @endif

                                        <td class="p-2">
                                            <div class="flex space-x-2">
                                                <a href="{{ route('admin.edit.user', $user) }}">
                                                    <span
                                                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200">
                                                        Edit
                                                    </span>
                                                </a>

                                                <a href="{{ route('admin.edit.user', $user) }}">
                                                    <span
                                                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200">
                                                        Reset Password
                                                    </span>
                                                </a>

                                                <form action="{{ route('admin.delete.user', $user) }}" method="POST">
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
                            @else
                                <tr>
                                    <td colspan="5" class="text-center">No users found</td>
                                </tr>
                            @endif
                        @else
                            @foreach ($users as $index => $user)
                                <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : '' }}">
                                    <td class="p-2">{{ $user->name }}</td>
                                    <td class="p-2">{{ $user->email }}</td>
                                    <td class="p-2" hidden>{{ $user->roleId }}</td>
                                    @if ($user->roleId == 1)
                                        <td class="p-2">Admin</td>
                                    @endif
                                    @if ($user->roleId == 2)
                                        <td class="p-2">Student</td>
                                    @endif

                                    <td class="p-2">
                                        <div class="flex space-x-2">
                                            <a href="{{ route('admin.edit.user', $user) }}">
                                                <span
                                                    class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200">
                                                    Edit
                                                </span>
                                            </a>

                                            <a href="{{ route('admin.edit.user', $user) }}">
                                                <span
                                                    class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200">
                                                    Reset Password
                                                </span>
                                            </a>

                                            <form action="{{ route('admin.delete.user', $user) }}" method="POST">
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
                        @endif
                    </tbody>
                </table>
                <div class="mt-4 p-4 text-white">
                    {{ $users->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
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
                    href="mailto:studentservices@websim.institute" class="underline">studentservices@websim.institute</a>.
            </p>
        </div>
    </div>
@endsection
