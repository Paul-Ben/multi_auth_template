<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('csstyles/studentdashboardstyle.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/scripts.js', 'resources/js/userupdate.js'])
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert/sweetalert.css') }}">
    <script src="{{ asset('vendor/sweetalert/sweetalert.js') }}"></script>

    <!-- Include the SweetAlerts script -->
    @include('sweetalert::alert')
</head>

<body class="bg-gray-100 font-sans">
    <nav class="top-nav bg-blue-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <button id="sidebarToggle" class="mr-4 md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <a href="/" class="text-2xl font-bold flex items-center">
                    <img alt="WebSim Institute logo, a stylized 'W' made of interconnected nodes"
                        src="{{ asset('headshot/Aboh Logo.png') }}" width="60" height="60" class="mr-2">
                    COE O
                </a>
            </div>
            <div class="flex items-center">
                <input type="text" placeholder="Search..."
                    class="bg-blue-800 text-white px-3 py-1 rounded-lg mr-4 hidden md:block">
                <div class="dropdown inline-block relative">
                    <button class="flex items-center space-x-2">
                        <img class="w-8 h-8 rounded-full" width="32" height="32"
                            src="{{ asset('headshot/AdobeStock_195490756_Preview.jpeg') }}" alt="User profile picture">
                        <span class="hidden md:inline-block">{{ Auth::user()->name }}</span>
                        <svg class="fill-current h-4 w-4 hidden md:inline-block" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </button>
                    <ul id="userMenu"
                        class="dropdown-menu absolute hidden text-gray-700 pt-1 bg-white rounded-md shadow-xl right-0 mt-2">
                        <li><a class="rounded-t hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap"
                                href="/profile">Profile</a></li>
                        <li><a class="hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap"
                                href="/settings">Settings</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="rounded-b hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">Logout</a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="flex">
        {{-- <aside id="sidebar" class="sidebar bg-blue-800 text-white w-64 min-h-screen p-4 fixed md:relative z-40">
            <nav>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('student.dashboard') }}"
                            class="@if (request()->routeIs('student.dashboard')) bg-blue-700 @endif py-2 px-4 rounded hover:bg-blue-700 flex items-center">
                            <svg class="w-4 h-4 text-gray-800 dark:text-white mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 7h.01m3.486 1.513h.01m-6.978 0h.01M6.99 12H7m9 4h2.706a1.957 1.957 0 0 0 1.883-1.325A9 9 0 1 0 3.043 12.89 9.1 9.1 0 0 0 8.2 20.1a8.62 8.62 0 0 0 3.769.9 2.013 2.013 0 0 0 2.03-2v-.857A2.036 2.036 0 0 1 16 16Z" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="{{ route('student.biodata') }}"
                            class="@if (request()->routeIs('student.biodata')) bg-blue-700 @endif flex items-center py-2 px-4 rounded hover:bg-blue-700">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            User Management
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('student.fee') }}"
                            class="@if (request()->routeIs('student.fee')) bg-blue-700 @endif flex items-center py-2 px-4 rounded hover:bg-blue-700">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="M8 7V6a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1M3 18v-7a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                            </svg>
                            Fees
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('student.otherpayments') }}"
                            class="@if (request()->routeIs('student.otherpayments')) bg-blue-700 @endif flex items-center py-2 px-4 rounded hover:bg-blue-700">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8H5m12 0a1 1 0 0 1 1 1v2.6M17 8l-4-4M5 8a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.6M5 8l4-4 4 4m6 4h-4a2 2 0 1 0 0 4h4a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1Z" />
                            </svg>
                            Other Payments
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('student.courseregistration') }}"
                            class="@if (request()->routeIs('student.courseregistration')) bg-blue-700 @endif flex items-center py-2 px-4 rounded hover:bg-blue-700">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m11.5 11.5 2.071 1.994M4 10h5m11 0h-1.5M12 7V4M7 7V4m10 3V4m-7 13H8v-2l5.227-5.292a1.46 1.46 0 0 1 2.065 2.065L10 17Zm-5 3h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                            </svg>
                            Course Registration
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('student.result') }}"
                            class="@if (request()->routeIs('student.result')) bg-blue-700 @endif flex items-center py-2 px-4 rounded hover:bg-blue-700">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 3v4a1 1 0 0 1-1 1H5m4 6 2 2 4-4m4-8v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z" />
                            </svg>
                            Results
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#"
                            class="@if (request()->routeIs('student.accomodation', 'student.accommodationapplication')) bg-blue-700 @endif flex items-center py-2 px-4 rounded hover:bg-blue-700">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
                            </svg>
                            Accommodation
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ route('student.accommodation') }}"
                                    class="@if (request()->routeIs('student.accommodation')) bg-blue-700 @endif block py-2 px-4 rounded hover:bg-blue-600">View
                                    Current Accommodation
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('student.accommodationapplication') }}"
                                    class="@if (request()->routeIs('student.accommodationapplication')) bg-blue-700 @endif block py-2 px-4 rounded hover:bg-blue-600">Apply
                                    for Accommodation
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('student.documents') }}"
                            class="@if (request()->routeIs('student.documents')) bg-blue-700 @endif flex items-center py-2 px-4 rounded hover:bg-blue-700">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 10V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1v6M5 19v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1M10 3v4a1 1 0 0 1-1 1H5m14 9.006h-.335a1.647 1.647 0 0 1-1.647-1.647v-1.706a1.647 1.647 0 0 1 1.647-1.647L19 12M5 12v5h1.375A1.626 1.626 0 0 0 8 15.375v-1.75A1.626 1.626 0 0 0 6.375 12H5Zm9 1.5v2a1.5 1.5 0 0 1-1.5 1.5v0a1.5 1.5 0 0 1-1.5-1.5v-2a1.5 1.5 0 0 1 1.5-1.5v0a1.5 1.5 0 0 1 1.5 1.5Z" />
                            </svg>
                            My Documents
                        </a>
                    </li>
                    <hr>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}"
                                class="flex items-center py-2 px-4 rounded hover:bg-blue-700"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                                </svg>
                                Logout
                            </a>
                        </form>
                    </li>
                </ul>
            </nav>
        </aside> --}}
        <aside id="sidebar" class="sidebar bg-blue-800 text-white w-67 min-h-screen p-4 fixed md:relative z-40">
            <nav>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                            class="@if (request()->routeIs('admin.dashboard')) bg-blue-700 @endif py-2 px-4 rounded hover:bg-blue-700 flex items-center">
                            <svg class="w-4 h-4 text-gray-800 dark:text-white mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 7h.01m3.486 1.513h.01m-6.978 0h.01M6.99 12H7m9 4h2.706a1.957 1.957 0 0 0 1.883-1.325A9 9 0 1 0 3.043 12.89 9.1 9.1 0 0 0 8.2 20.1a8.62 8.62 0 0 0 3.769.9 2.013 2.013 0 0 0 2.03-2v-.857A2.036 2.036 0 0 1 16 16Z" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <hr>
                    <li class="menu-item">
                        <a href="#" class="flex items-center py-2 px-4 rounded hover:bg-blue-700">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            User Management
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ route('admin.manageuser') }}"
                                    class="@if (request()->routeIs('admin.manage-user')) bg-blue-700 @endif block py-2 px-4 rounded hover:bg-blue-600">
                                    Manage User
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="@if (request()->routeIs('admin.manageStudent')) bg-blue-700 @endif block py-2 px-4 rounded hover:bg-blue-600">
                                    Manage Student
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#"
                            class="@if (request()->routeIs('admin.application', 'admin.application-view', 'admin.edit-application')) bg-blue-700 @endif flex items-center py-2 px-4 rounded hover:bg-blue-700">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M8 7V6a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1M3 18v-7a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                            </svg>
                            Application Management
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ route('admin.application') }}"
                                    class="@if (request()->routeIs('admin.application')) bg-blue-700 @endif block py-2 px-4 rounded hover:bg-blue-600">
                                    Manage Application
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"
                            class="@if (request()->routeIs('admin.feeManagement')) bg-blue-700 @endif flex items-center py-2 px-4 rounded hover:bg-blue-700">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="M17 8H5m12 0a1 1 0 0 1 1 1v2.6M17 8l-4-4M5 8a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.6M5 8l4-4 4 4m6 4h-4a2 2 0 1 0 0 4h4a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1Z" />
                            </svg>
                            Fee Management
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('faculty.index') }}"
                            class="@if (request()->routeIs('faculty.index', 'faculty.create', 'faculty.edit', 'faculty.show')) bg-blue-700 @endif flex items-center py-2 px-4 rounded hover:bg-blue-700">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
                            </svg>
                            Faculty/Unit Management
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('department.index') }}"
                            class="@if (request()->routeIs('department.index', 'department.create', 'department.edit', 'department.show')) bg-blue-700 @endif flex items-center py-2 px-4 rounded hover:bg-blue-700">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m11.5 11.5 2.071 1.994M4 10h5m11 0h-1.5M12 7V4M7 7V4m10 3V4m-7 13H8v-2l5.227-5.292a1.46 1.46 0 0 1 2.065 2.065L10 17Zm-5 3h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                            </svg>
                            Department Management
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('course.index') }}"
                            class="@if (request()->routeIs('course.index', 'viewDepartmentCourses', 'course.create', 'course.edit', 'course.show')) bg-blue-700 @endif flex items-center py-2 px-4 rounded hover:bg-blue-700">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 9v3m0 0v3m0-3h3m-3 0h-3m6-5V5a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2M6 19h12a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1Z" />
                            </svg>
                            Course Management
                        </a>
                    </li>
                    <hr>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}"
                                class="flex items-center py-2 px-4 rounded hover:bg-blue-700"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z" />
                                </svg>
                                Logout
                            </a>
                        </form>
                    </li>
                </ul>
            </nav>
        </aside>


        <main class="flex-1 p-4 md:p-6 md:ml-0 main-content">
            @yield('content')
        </main>
    </div>

    <footer class="bg-blue-900 text-white py-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 Institute. All rights reserved.</p>
            <p class="mt-2">
                <a href="/privacy-policy" class="hover:underline">Privacy Policy</a> |
                <a href="/terms-of-service" class="hover:underline">Terms of Service</a> |
                <a href="/contact-us" class="hover:underline">Contact Us</a>
            </p>
        </div>
    </footer>
    <script src="{{ asset('scripts/dashboardscripts.js') }}"></script>
    <script src="{{ asset('scripts/userupdate.js') }}"></script>

    {{-- <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('open');
        });

        // Close sidebar when clicking outside of it
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const sidebarToggle = document.getElementById('sidebarToggle');
            if (!sidebar.contains(event.target) && event.target !== sidebarToggle) {
                sidebar.classList.remove('open');
            }
        });

        // Toggle sub-menu visibility
        document.querySelectorAll('.sidebar .menu-item > a').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                this.parentElement.classList.toggle('active');
                const subMenu = this.nextElementSibling;
                if (subMenu) {
                    subMenu.style.display = subMenu.style.display === 'block' ? 'none' : 'block';
                }
            });
        });
        // Biodata page generate date of printing
        document.getElementById('generated-date').textContent = new Date().toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });
    </script> --}}

</body>

</html>
