@extends('layouts.student.studentDashboardLayout')
@section('content')
    <div>
        <h1 class="text-3xl font-bold mb-8">Student Accommodation</h1>

        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-semibold mb-4">Your Current Accommodation</h2>
            <div class="flex items-center mb-4">
                <img alt="Dormitory building exterior, modern architecture with large windows" src="{{asset('headshot/marcus-loke-WQJvWU_HZFo-unsplash.jpg')}}"
                    class="w-32 h-32 object-cover rounded-lg mr-6" width="128" height="128">
                <div>
                    <p class="font-semibold">Building: Turing Hall</p>
                    <p>Room: 301</p>
                    <p>Type: Double Occupancy</p>
                    <p>Roommate: Alex Johnson</p>
                    <p>Check-in Date: August 15, 2023</p>
                    <p>Check-out Date: May 30, 2024</p>
                </div>
            </div>
            <a href="/accommodation/current" class="text-blue-500 hover:underline">View full accommodation details</a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-semibold mb-4">Accommodation Options for Next Semester</h2>
            <p class="mb-4">Selection for next semester's accommodation opens on April 1, 2024. Mark your calendar!</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="room-preview bg-gray-100 p-4 rounded-lg">
                    <img alt="Single room interior with bed, desk, and window" src="{{asset('headshot/zoshua-colah-TzMGehZmocI-unsplash.jpg')}}"
                        class="w-full h-48 object-cover rounded-lg mb-4" width="300" height="200">
                    <h3 class="font-semibold">Single Room</h3>
                    <p>Private room with shared bathroom</p>
                    <p class="text-blue-500">$3,500 / semester</p>
                </div>
                <div class="room-preview bg-gray-100 p-4 rounded-lg">
                    <img alt="Double room interior with two beds, desks, and large window" src="{{asset('headshot/marcus-loke-WQJvWU_HZFo-unsplash.jpg')}}"
                        class="w-full h-48 object-cover rounded-lg mb-4" width="300" height="200">
                    <h3 class="font-semibold">Double Room</h3>
                    <p>Shared room with one roommate</p>
                    <p class="text-blue-500">$2,800 / semester</p>
                </div>
                <div class="room-preview bg-gray-100 p-4 rounded-lg">
                    <img alt="Suite interior with common area, kitchenette, and multiple bedrooms" src="{{asset('headshot/zoshua-colah-TzMGehZmocI-unsplash.jpg')}}"
                        class="w-full h-48 object-cover rounded-lg mb-4" width="300" height="200">
                    <h3 class="font-semibold">Suite</h3>
                    <p>4-person suite with shared living area</p>
                    <p class="text-blue-500">$3,200 / semester</p>
                </div>
            </div>
            <a href="/accommodation/apply"
                class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">Apply
                for Accommodation</a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-semibold mb-4">Maintenance Requests</h2>
            <form action="/accommodation/maintenance-request" method="POST" class="space-y-4">
                <div>
                    <label for="issue" class="block text-sm font-medium text-gray-700 mb-2">Describe the issue:</label>
                    <textarea id="issue" name="issue" rows="3"
                        class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-blue-500" required></textarea>
                </div>
                <div>
                    <label for="urgency" class="block text-sm font-medium text-gray-700 mb-2">Urgency:</label>
                    <select id="urgency" name="urgency"
                        class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-blue-500"
                        required>
                        <option value="low">Low - Can wait</option>
                        <option value="medium">Medium - Needs attention soon</option>
                        <option value="high">High - Urgent issue</option>
                    </select>
                </div>
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">Submit
                    Request</button>
            </form>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-semibold mb-4">Accommodation Policies</h2>
            <ul class="list-disc list-inside space-y-2">
                <li>Quiet hours are from 10 PM to 7 AM on weekdays, and 12 AM to 9 AM on weekends.</li>
                <li>No smoking is allowed in any campus buildings.</li>
                <li>Guests must be registered at the front desk and are not allowed to stay overnight without prior
                    approval.</li>
                <li>Students are responsible for keeping their living spaces clean and tidy.</li>
                <li>Any damages to university property will be charged to the student's account.</li>
            </ul>
            <a href="/accommodation/full-policy" class="text-blue-500 hover:underline mt-4 inline-block">Read full
                accommodation policy</a>
        </div>

        <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4" role="alert">
            <p class="font-bold">Need assistance?</p>
            <p>If you have any questions about your accommodation or need to report an issue, please contact the Housing
                Office at <a href="mailto:housing@websim.institute" class="underline">housing@websim.institute</a> or call
                555-0123.</p>
        </div>
    </div>
@endsection
