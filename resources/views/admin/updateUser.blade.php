@extends('layouts.admin.adminDashboardLayout')
@section('content')
<div>
    <main class="py-16">
        <div class="container mx-auto px-6">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    </div>
            @endif
            <h2 class="text-3xl font-bold text-center mb-8">Edit User</h2>
            <form action="{{ route('admin.updateUser', $user) }}" method="POST" class="bg-white p-8 rounded-lg shadow-md space-y-6">
                @csrf
                @method('PUT')

                <!-- Personal Information Section -->
                <div class="border border-gray-400 p-3 rounded">
                    <h3 class="text-xl font-semibold mb-4">Edit User Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" id="name" name="name"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md"
                                value="{{ $user->name }}" >
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="text" name="email" id="email" value="{{ $user->email }}"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="roleId" class="block text-sm font-medium text-gray-700">Role</label>
                            <select name="roleId" id="role"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                                <option value="{{ $user->roleId}}"></option>
                                @foreach ($roles as $role)
                                <option value="{{$role->id}}">{{$role->rolename}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="text-center pt-3">
                    <button type="submit"
                        class="bg-blue-800 text-white py-2 px-6 rounded-full text-lg font-semibold hover:bg-blue-700 transition duration-300">Update</button>
                </div>
                </div>
            </form>
        </div>
    </main>
</div>
@endsection