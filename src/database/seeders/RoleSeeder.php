<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat role 'admin' jika belum ada
        Role::firstOrCreate(['name' => 'admin']);

        // Membuat role 'user' jika belum ada
        Role::firstOrCreate(['name' => 'user']);

        // Tambahkan role lain sesuai kebutuhan project
        // Role::firstOrCreate(['name' => 'manager']);
    }
}
