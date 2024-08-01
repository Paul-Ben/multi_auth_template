<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory()->create([
            'rolename' => 'admin',
        ]);
        Role::factory()->create([
            'rolename' => 'student',
        ]);
        Role::factory()->create([
            'rolename' => 'teacher',
        ]);
        Role::factory()->create([
            'rolename' => 'it',
        ]);
    }
}
