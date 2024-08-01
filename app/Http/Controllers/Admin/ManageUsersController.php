<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule\Password;

class ManageUsersController extends Controller
{
    public function index(User $user)
    {
        $title = 'Admin Dashboard - User Manager';

        $users = User::paginate(10);
        return view('admin.userManage', ['users' => $users, 'title' => $title]);
    }

    public function create()
    {
        $title = 'Admin Dashboard - Create User';
        $roles = Role::all();
        return view('admin.addUser', ['title' => $title, 'roles' => $roles]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed'],

        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'roleId' => $request->roleId,
        ]);

        event(new Registered($user));
        return redirect()->route('admin.manageuser')->with('success', 'User created successfully');
    }

    public function edit(User $user)
    {
        $title = 'Edit User';
        $roles = Role::all();
        return view('admin.updateUser', ['title' => $title, 'user' => $user, 'roles' => $roles]);
    }

    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
        ]);
        $user->update($request->all());

        return redirect()->route('admin.manageuser')->with('success', 'User updated!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.manageuser')->with('success', 'User deleted!');
    }
}
