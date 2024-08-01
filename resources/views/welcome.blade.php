@extends('layouts.homeLayout')
@section('content')
<div>

    <section class="bg-blue-800 text-white py-20 relative">
        <div class="absolute inset-0 z-0">
            <img alt="Abstract digital landscape with glowing nodes and connections, representing a virtual reality environment" src="{{asset('images/alevel/1721724680_iphone 132.jpeg')}}" class="w-full h-full object-cover opacity-30" width="1920" height="1080">
        </div>
        <div class="container mx-auto px-6 text-center relative z-10">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Shape the Future of Digital Reality</h1>
            <p class="text-xl mb-8">Join COE Institute and explore the frontiers of simulated experiences</p>
            <a href="{{route('application.create')}}" class="bg-white text-blue-800 py-2 px-6 rounded-full text-lg font-semibold hover:bg-blue-100 transition duration-300">Apply Now</a>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-8">Why Choose COE Institute?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img alt="Students using VR headsets in a high-tech classroom" src="cutting-edge-curriculum.jpg" class="w-full h-48 object-cover mb-4 rounded" width="400" height="300">
                    <h3 class="text-xl font-semibold mb-4">Cutting-edge Curriculum</h3>
                    <p>Our programs blend computer science, psychology, and design to create immersive digital experiences.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img alt="Diverse group of professors collaborating on a holographic display" src="world-class-faculty.jpg" class="w-full h-48 object-cover mb-4 rounded" width="400" height="300">
                    <h3 class="text-xl font-semibold mb-4">World-class Faculty</h3>
                    <p>Learn from pioneers in virtual reality, augmented reality, and simulated environments.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img alt="Students presenting their projects to industry professionals in a futuristic auditorium" src="industry-partnerships.jpg" class="w-full h-48 object-cover mb-4 rounded" width="400" height="300">
                    <h3 class="text-xl font-semibold mb-4">Industry Partnerships</h3>
                    <p>Collaborate with leading tech companies and research institutions on groundbreaking projects.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-200 py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-8">Featured Programs</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <a href="/programs/vr-design" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <img alt="Student designing a virtual reality environment using holographic tools" src="vr-design-program.jpg" class="w-full h-48 object-cover mb-4 rounded" width="400" height="300">
                    <h3 class="text-xl font-semibold mb-2">Virtual Reality Design</h3>
                    <p>Create immersive VR experiences that push the boundaries of digital interaction.</p>
                </a>
                <a href="/programs/ai-simulation" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <img alt="AI-powered simulation of a complex city system with flowing data visualizations" src="ai-simulation-program.jpg" class="w-full h-48 object-cover mb-4 rounded" width="400" height="300">
                    <h3 class="text-xl font-semibold mb-2">AI-Driven Simulations</h3>
                    <p>Develop intelligent systems that power complex simulated environments.</p>
                </a>
                <a href="/programs/digital-psychology" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <img alt="Researchers studying brain activity of a person immersed in a virtual environment" src="digital-psychology-program.jpg" class="w-full h-48 object-cover mb-4 rounded" width="400" height="300">
                    <h3 class="text-xl font-semibold mb-2">Digital Psychology</h3>
                    <p>Explore the psychological impacts and potential of virtual experiences.</p>
                </a>
            </div>
        </div>
    </section>

    <section class="py-16 bg-blue-900 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-8">Ready to Shape the Future?</h2>
            <a href="{{route('application.create')}}" class="bg-white text-blue-800 py-3 px-8 rounded-full text-lg font-semibold hover:bg-blue-100 transition duration-300">Start Your Application</a>
        </div>
    </section>
</div>
@endsection