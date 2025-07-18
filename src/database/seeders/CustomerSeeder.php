<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Contoh seeding manual 5 customer
        Customer::insert([
            [
                'full_name' => 'Jessica Ramli',
                'email' => 'jessica@example.com',
                'phone_number' => '081234567890',
                'address' => 'Jl. Merdeka No.1',
                'gender' => 'female',
                'date_of_birth' => '2000-05-15',
                'city' => 'Jakarta',
                'postal_code' => '10110',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Budi Santoso',
                'email' => 'budi@example.com',
                'phone_number' => '081298765432',
                'address' => 'Jl. Sudirman No.10',
                'gender' => 'male',
                'date_of_birth' => '1995-08-22',
                'city' => 'Bandung',
                'postal_code' => '40111',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Siti Aminah',
                'email' => 'siti@example.com',
                'phone_number' => '082112345678',
                'address' => 'Jl. Diponegoro No.5',
                'gender' => 'female',
                'date_of_birth' => '1998-02-10',
                'city' => 'Surabaya',
                'postal_code' => '60222',
                'status' => 'inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Andi Wijaya',
                'email' => 'andi@example.com',
                'phone_number' => '081355577799',
                'address' => 'Jl. Ahmad Yani No.15',
                'gender' => 'male',
                'date_of_birth' => '1992-12-01',
                'city' => 'Medan',
                'postal_code' => '20151',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Maya Putri',
                'email' => 'maya@example.com',
                'phone_number' => '081266677788',
                'address' => 'Jl. Gatot Subroto No.25',
                'gender' => 'female',
                'date_of_birth' => '2001-09-09',
                'city' => 'Yogyakarta',
                'postal_code' => '55111',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Atau jika ingin data banyak menggunakan factory
        // Customer::factory()->count(50)->create();
    }
}
