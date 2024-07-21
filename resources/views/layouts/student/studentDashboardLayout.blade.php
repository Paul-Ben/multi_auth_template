<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('csstyles/studentdashboardstyle.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans">
    <nav class="top-nav bg-blue-900 text-white p-4">
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
                        src="{{ asset('headshot/logo.png') }}" width="60" height="60" class="mr-2">
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
                    <ul
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
        <aside id="sidebar" class="sidebar bg-blue-800 text-white w-64 min-h-screen p-4 fixed md:relative z-40">
            <nav>
                <ul class="space-y-2">
                    <li><a href="{{ route('student.dashboard') }}"
                            class="@if (request()->routeIs('student.dashboard')) bg-blue-700 @endif block py-2 px-4 rounded hover:bg-blue-700">Dashboard</a>
                    </li>
                    <hr>
                    <li><a href="{{ route('student.biodata') }}"
                            class="@if (request()->routeIs('student.biodata')) bg-blue-700 @endif block py-2 px-4 rounded hover:bg-blue-700">Bio
                            Data</a></li>
                    <li><a href="{{ route('student.fee') }}"
                            class="@if (request()->routeIs('student.fee')) bg-blue-700 @endif block py-2 px-4 rounded hover:bg-blue-700">Fees</a>
                    </li>
                    <li><a href="{{ route('student.otherpayments') }}"
                            class="@if (request()->routeIs('student.otherpayments')) bg-blue-700 @endif block py-2 px-4 rounded hover:bg-blue-700">Other
                            Payments</a>
                    </li>
                    <li><a href="{{ route('student.courseregistration') }}"
                            class="@if (request()->routeIs('student.courseregistration')) bg-blue-700 @endif block py-2 px-4 rounded hover:bg-blue-700">Course
                            Registration</a></li>
                    <li><a href="{{ route('student.result') }}"
                            class="@if (request()->routeIs('student.result')) bg-blue-700 @endif block py-2 px-4 rounded hover:bg-blue-700">Results</a>
                    </li>
                    <li class="menu-item">
                        <a href="#"
                            class="@if (request()->routeIs('student.accomodation', 'student.accommodationapplication')) bg-blue-700 @endif block py-2 px-4 rounded hover:bg-blue-700">Accommodation</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('student.accommodation') }}"
                                    class="@if (request()->routeIs('student.accommodation')) bg-blue-700 @endif block py-2 px-4 rounded hover:bg-blue-600">View
                                    Current Accommodation</a></li>
                            <li><a href="{{ route('student.accommodationapplication') }}"
                                    class="@if (request()->routeIs('student.accommodationapplication')) bg-blue-700 @endif block py-2 px-4 rounded hover:bg-blue-600">Apply
                                    for Accommodation</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('student.documents') }}"
                            class="@if (request()->routeIs('student.documents')) bg-blue-700 @endif block py-2 px-4 rounded hover:bg-blue-700">My
                            Documents</a></li>
                    <hr>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" class="block py-2 px-4 rounded hover:bg-blue-700"
                                onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                Logout</a>
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
