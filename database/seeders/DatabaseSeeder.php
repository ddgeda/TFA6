<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seed 5 sample customers
        Customer::create(['full_name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'phone' => '09123456789']);
        Customer::create(['full_name' => 'Maria Santos', 'email' => 'maria@example.com', 'phone' => '09187654321']);
        Customer::create(['full_name' => 'Jose Rizal', 'email' => 'jose@example.com', 'phone' => '09112233445']);
        Customer::create(['full_name' => 'Andres Bonifacio', 'email' => 'andres@example.com', 'phone' => '09998887766']);
        Customer::create(['full_name' => 'Apolinario Mabini', 'email' => 'apolinario@example.com', 'phone' => '09554433221']);

        // Seed 5 sample users
        User::create(['username' => 'admin_johndoe', 'full_name' => 'John Doe']);
        User::create(['username' => 'cashier_anna', 'full_name' => 'Anna Smith']);
        User::create(['username' => 'manager_mark', 'full_name' => 'Mark Wilson']);
        User::create(['username' => 'staff_liza', 'full_name' => 'Liza Soberano']);
        User::create(['username' => 'cashier_carl', 'full_name' => 'Carl Johnson']);
    }
}