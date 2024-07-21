@extends('layouts.student.studentDashboardLayout')
@section('content')
    <div>
        <h1 class="text-3xl font-bold mb-8">Apply for Accommodation</h1>

        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-semibold mb-4">Accommodation Application Form</h2>
            <form action="/accommodation/submit-application" method="POST" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="academic_year" class="block text-sm font-medium text-gray-700 mb-2">Academic Year</label>
                        <select id="academic_year" name="academic_year"
                            class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-blue-500"
                            required>
                            <option value="">Select Academic Year</option>
                            <option value="2023-2024">2023-2024</option>
                            <option value="2024-2025">2024-2025</option>
                        </select>
                    </div>
                    <div>
                        <label for="semester" class="block text-sm font-medium text-gray-700 mb-2">Semester</label>
                        <select id="semester" name="semester"
                            class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-blue-500"
                            required>
                            <option value="">Select Semester</option>
                            <option value="Fall">Fall</option>
                            <option value="Spring">Spring</option>
                            <option value="Summer">Summer</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label for="accommodation_type" class="block text-sm font-medium text-gray-700 mb-2">Preferred
                        Accommodation Type</label>
                    <select id="accommodation_type" name="accommodation_type"
                        class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-blue-500"
                        required>
                        <option value="">Select Accommodation Type</option>
                        <option value="single">Single Room</option>
                        <option value="double">Double Room</option>
                        <option value="suite">Suite</option>
                    </select>
                </div>

                <div>
                    <label for="special_requirements" class="block text-sm font-medium text-gray-700 mb-2">Special
                        Requirements or Preferences</label>
                    <textarea id="special_requirements" name="special_requirements" rows="3"
                        class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-blue-500"></textarea>
                </div>

                <div>
                    <label for="roommate_preference" class="block text-sm font-medium text-gray-700 mb-2">Roommate
                        Preference (if applicable)</label>
                    <input type="text" id="roommate_preference" name="roommate_preference"
                        class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-blue-500"
                        placeholder="Enter roommate's name or ID">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Meal Plan</label>
                    <div class="space-y-2">
                        <label class="inline-flex items-center">
                            <input type="radio" name="meal_plan" value="full" class="form-radio" required>
                            <span class="ml-2">Full Meal Plan (3 meals/day)</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="meal_plan" value="partial" class="form-radio">
                            <span class="ml-2">Partial Meal Plan (2 meals/day)</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="meal_plan" value="none" class="form-radio">
                            <span class="ml-2">No Meal Plan</span>
                        </label>
                    </div>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="terms" name="terms" class="form-checkbox" required>
                    <label for="terms" class="ml-2 text-sm text-gray-700">I agree to the <a href="/accommodation/terms"
                            class="text-blue-500 hover:underline">terms and conditions</a> of on-campus
                        accommodation</label>
                </div>

                <button type="submit"
                    class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition duration-200">Submit
                    Application</button>
            </form>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-semibold mb-4">Important Information</h2>
            <ul class="list-disc list-inside space-y-2">
                <li>Applications are processed on a first-come, first-served basis.</li>
                <li>You will be notified of your application status within 2 weeks of submission.</li>
                <li>A non-refundable application fee of $50 will be charged to your student account upon submission.</li>
                <li>If accepted, a deposit of $500 will be required to secure your accommodation.</li>
                <li>Cancellations must be made at least 30 days before the start of the semester to receive a partial
                    refund.</li>
            </ul>
        </div>

        <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4" role="alert">
            <p class="font-bold">Need assistance?</p>
            <p>If you have any questions about the application process, please contact the Housing Office at <a
                    href="mailto:housing@websim.institute" class="underline">housing@websim.institute</a> or call 555-0123.
            </p>
        </div>
    </div>
@endsection
