<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebSim Institute - Shaping Digital Realities</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/scripts.js'])
</head>
<body class="bg-gray-100 font-sans">
    <header class="bg-blue-900 text-white">
        {{-- <nav class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold flex items-center">
                <img alt="WebSim Institute logo, a stylized 'W' made of interconnected nodes" src="{{asset('headshot/logo.png')}}" width="60" height="60" class="mr-2 rounded-full">
                COE Institute --}}
            </a>
            {{-- <div class="hidden md:flex space-x-4">
                <a href="/programs" class="hover:text-blue-300">Programs</a>
                <a href="/research" class="hover:text-blue-300">Research</a>
                <a href="/admissions" class="hover:text-blue-300">Admissions</a>
                <a href="/about" class="hover:text-blue-300">About</a>
                <a href="/about" class="hover:text-blue-300">Apply Now</a>
                <a href="{{route('login')}}" class="hover:text-blue-300">Login</a>
            </div> --}}
            {{-- <div class="hidden md:flex space-x-4 relative">
                <a href="/programs" class="hover:text-blue-300">Programs</a>
                <a href="/research" class="hover:text-blue-300">Research</a>
                
                <!-- Admissions with Dropdown -->
                <div class="relative group">
                    <a href="/admissions" class="hover:text-blue-300">Admissions</a>
                    <div class="absolute hidden group-hover:block bg-white text-blue-900 shadow-lg rounded-lg mt-1">
                        <a href="/apply" class="block px-4 py-2 hover:bg-blue-100">Apply Now</a>
                    </div>
                </div>
                
                <a href="/about" class="hover:text-blue-300">About</a>
                <a href="{{route('login')}}" class="hover:text-blue-300">Login</a>
            </div>
            <button class="md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </nav> --}}

        <nav class="container mx-auto px-6 py-3 flex justify-between items-center">
            
            <a href="/" class="text-2xl font-bold flex items-center">
                <img alt="WebSim Institute logo, a stylized 'W' made of interconnected nodes" src="{{asset('headshot/logo.png')}}" width="60" height="60" class="mr-2 rounded-full">
                COE Institute
            </a>
            <div class="max-w-screen-xl flex flex-wrap justify-between mx-auto p-4">
            <ul class="hidden md:flex space-x-4 relative items-center">
                <li><a href="/programs" class="mr-3  hover:text-blue-300">Programs</a></li>
                <li><a href="/research" class="hover:text-blue-300">Research</a></li>
                
                <!-- Admissions with Dropdown -->
                <li class="relative group">
                    <a href="/admissions" class="hover:text-blue-300">Admissions</a>
                    <ul class="absolute hidden group-hover:block bg-white text-blue-900 shadow-lg rounded-lg mt-1">
                        <li><a href="/apply" class="block px-4 py-2 hover:bg-blue-100">Apply Now</a></li>
                    </ul>
                </li>
                
                <li><a href="/about" class="hover:text-blue-300">About</a></li>
                <li><a href="{{route('login')}}" class="hover:text-blue-300">Login</a></li>
            </ul>
            <button class="md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        </nav>
        
    </header>
    <main>
        @yield('content')
    </main>

    <footer class="bg-blue-900 text-white py-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h3 class="text-xl font-semibold mb-2">WebSim Institute</h3>
                    <p>Shaping the future of digital reality</p>
                </div>
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h4 class="text-lg font-semibold mb-2">Quick Links</h4>
                    <ul>
                        <li><a href="/programs" class="hover:text-blue-300">Programs</a></li>
                        <li><a href="/admissions" class="hover:text-blue-300">Admissions</a></li>
                        <li><a href="/research" class="hover:text-blue-300">Research</a></li>
                        <li><a href="/contact" class="hover:text-blue-300">Contact</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h4 class="text-lg font-semibold mb-2">Connect</h4>
                    <ul>
                        <li><a href="https://twitter.com/websim_institute" class="hover:text-blue-300">Twitter</a></li>
                        <li><a href="https://www.linkedin.com/school/websim-institute" class="hover:text-blue-300">LinkedIn</a></li>
                        <li><a href="https://www.youtube.com/websim_institute" class="hover:text-blue-300">YouTube</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/4">
                    <h4 class="text-lg font-semibold mb-2">Newsletter</h4>
                    <form action="/subscribe" method="GET" class="flex">
                        <input type="email" name="email" placeholder="Your email" class="p-2 rounded-l-lg w-full" required>
                        <button type="submit" class="bg-blue-700 text-white p-2 rounded-r-lg hover:bg-blue-600">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="mt-8 text-center">
                <p>&copy; 2023 WebSim Institute. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>


