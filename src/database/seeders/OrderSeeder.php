<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Customer;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil semua customer yang ada
        $customers = Customer::all();

        // Jika tidak ada customer, hentikan seeding
        if ($customers->count() == 0) {
            $this->command->info('No customers found, skipping order seeder.');
            return;
        }

        // Buat order untuk setiap customer (contoh 2 order per customer)
        foreach ($customers as $customer) {
            for ($i = 1; $i <= 2; $i++) {
                Order::create([
                    'customer_id' => $customer->id,
                    'order_number' => 'ORD-' . strtoupper(uniqid()),
                    'order_date' => now()->subDays(rand(0, 30)),
                    'status' => 'pending',
                    'total_amount' => rand(50000, 500000),
                    'payment_method' => 'transfer',
                    'payment_status' => 'unpaid',
                    'shipping_address' => $customer->address,
                    'shipping_cost' => rand(10000, 50000),
                    'shipping_status' => 'processing',
                    'notes' => 'Order dummy untuk testing.',
                    'discount' => rand(0, 10000),
                ]);
            }
        }
    }
}
