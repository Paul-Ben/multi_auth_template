@extends('layouts.homeLayout')
@section('content')
    <main class="py-16">
        <div class="container mx-auto px-6">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    </div>
            @endif
            <h2 class="text-3xl font-bold text-center mb-8">Application Form</h2>
            <form action="{{ route('application.store') }}" method="POST" class="bg-white p-8 rounded-lg shadow-md space-y-6" enctype="multipart/form-data">
                @csrf

                <!-- Personal Information Section -->
                <div class="border border-gray-400 p-3 rounded">
                    <h3 class="text-xl font-semibold mb-4">Personal Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label for="applicationId" class="block text-sm font-medium text-gray-700">Application ID</label>
                            <input type="text" id="appId" name="" id="applicationId"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md"
                                value="{{ 'App/sch/dept/' . rand(0000, 9999) }}" disabled>
                            <input type="text" name="applicationId" id="applicationId" hidden>
                        </div>
                        <div>
                            <label for="firstName" class="block text-sm font-medium text-gray-700">First Name</label>
                            <input type="text" name="firstName" id="firstName"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="middleName" class="block text-sm font-medium text-gray-700">Middle Name</label>
                            <input type="text" name="middleName" id="middleName"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="lastName" class="block text-sm font-medium text-gray-700">Last Name</label>
                            <input type="text" name="lastName" id="lastName"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="phoneNumber" class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <input type="tel" name="phoneNumber" id="phoneNumber"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                            <input type="text" name="address" id="address"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                            <select name="gender" id="gender"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label for="maritalStatus" class="block text-sm font-medium text-gray-700">Marital
                                Status</label>
                            <select name="maritalStatus" id="maritalStatus"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                                <option value="">Select Marital Status</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="divorced">Divorced</option>
                                <option value="widowed">Widowed</option>
                            </select>
                        </div>
                        <div>
                            <label for="nationality" class="block text-sm font-medium text-gray-700">Nationality</label>
                            <input type="text" name="nationality" id="nationality"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="stateOfOrigin" class="block text-sm font-medium text-gray-700">State of
                                Origin</label>
                                <select id="state" class="mt-1 p-2 block w-full border border-gray-300 rounded-md @error('state') is-invalid @enderror"
                                        name="stateOfOrigin" value="{{ old('state') }}" required>
                                        <option value="">Select a state</option>
                                    </select>
                        </div>
                        <div>
                            <label for="lga" class="block text-sm font-medium text-gray-700">Local Government
                                Area</label>
                                <select id="lga" onfocus="populateLGAs()"
                                        class="mt-1 p-2 block w-full border border-gray-300 rounded-md @error('lga') is-invalid @enderror" name="lga"
                                        value="{{ old('lga') }}" required>
                                        <option value="">Select an LGA</option>
                                    </select>
                        </div>
                        <div>
                            <label for="courseAppliedFor" class="block text-sm font-medium text-gray-700">Course Applied
                                For</label>
                            <input type="text" name="courseAppliedFor" id="courseAppliedFor"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="dateOfBirth" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                            <input type="date" name="dateOfBirth" id="dateOfBirth"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                        </div>
                    </div>
                </div>

                <!-- Next of Kin Section -->
                <div class="border border-gray-400 p-3 rounded">
                <div>
                    <h3 class="text-xl font-semibold mb-4">Next of Kin</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label for="nextOfKin" class="block text-sm font-medium text-gray-700">Next of Kin</label>
                            <input type="text" name="nextOfKin" id="nextOfKin"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="nextOfKinPhoneNumber" class="block text-sm font-medium text-gray-700">Next of Kin
                                Phone Number</label>
                            <input type="tel" name="nextOfKinPhoneNumber" id="nextOfKinPhoneNumber"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="nextOfKinAddress" class="block text-sm font-medium text-gray-700">Next of Kin
                                Address</label>
                            <input type="text" name="nextOfKinAddress" id="nextOfKinAddress"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                        </div>
                    </div>
                </div>

                <!-- Application Details Section -->
                <div>
                    <h3 class="text-xl font-semibold mb-4">Application Details</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div hidden>
                            <label for="applicationStatus" class="block text-sm font-medium text-gray-700">Application
                                Status</label>
                                <input type="text" name="applicationStatus" id="applicationStatus"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md" value="pending" >
                                
                        </div>
                        <div>
                            <label for="olevel" class="block text-sm font-medium text-gray-700">O-Level Results</label>
                            <input type="file" name="olevel" id="olevel"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md" accept="image/*" onchange="validateFileSize(this)">
                                <img id="olevel-preview" class="image-preview" style="display:none;" width="90" height="90"/>
                        </div>
                        <div>
                            <label for="alevel" class="block text-sm font-medium text-gray-700">A-Level Results</label>
                            <input type="file" name="alevel" id="alevel"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md" accept="image/*" onchange="validateFileSize(this)">
                                <img id="alevel-preview" class="image-preview" style="display:none;" width="90" height="90"/>
                        </div>
                        <div>
                            <label for="jamb" class="block text-sm font-medium text-gray-700">JAMB Results</label>
                            <input type="file" name="jamb" id="jamb"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md" accept="image/*" onchange="validateFileSize(this)">
                                <img id="jamb-preview" class="image-preview" style="display:none;" width="90" height="90" />

                        </div>
                    </div>
                </div>

                <div class="text-center pt-3">
                    <button type="submit"
                        class="bg-blue-800 text-white py-2 px-6 rounded-full text-lg font-semibold hover:bg-blue-700 transition duration-300">Submit
                        Application</button>
                </div>
                </div>
            </form>
        </div>
    </main>
    <script>
        function validateFileSize(input) {
            const maxFileSize = 500 * 1024; // 500KB in bytes
            const file = input.files[0];

            if (file && file.size > maxFileSize) {
                alert("The file size should not exceed 500KB.");
                input.value = ""; // Clear the input value
            }
            displayImagePreview(input);
        }

        function displayImagePreview(input) {
            const file = input.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const imgElement = document.getElementById(input.id + '-preview');
                    imgElement.src = e.target.result;
                    imgElement.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
    <script src="{{asset('statescript.js')}}"></script>
@endsection
