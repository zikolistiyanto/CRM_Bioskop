<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Customer;
use App\Models\Interaction;
use App\Models\Lead;
use App\Models\Ticket;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create Users
        $admin = User::create([
            'name' => 'Ziko Listiyanto',
            'email' => 'admin@crm.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        $manager = User::create([
            'name' => 'Ziko Listiyanto',
            'email' => 'manager@crm.com',
            'password' => Hash::make('password'),
            'role' => 'manager',
        ]);

        $cs = User::create([
            'name' => 'Risky Bayu Septyanda',
            'email' => 'cs@crm.com',
            'password' => Hash::make('password'),
            'role' => 'cs',
        ]);

        $sales = User::create([
            'name' => 'Zulkifli Saleh',
            'email' => 'sales@crm.com',
            'password' => Hash::make('password'),
            'role' => 'sales',
        ]);

        // 2. Create Customers
        $customersData = [
            ['name' => 'Budi Santoso', 'email' => 'budi@gmail.com', 'phone' => '081234567891', 'address' => 'Jakarta'],
            ['name' => 'Siti Aminah', 'email' => 'siti@gmail.com', 'phone' => '081234567892', 'address' => 'Bandung'],
            ['name' => 'Ahmad Fauzi', 'email' => 'ahmad@gmail.com', 'phone' => '081234567893', 'address' => 'Surabaya'],
            ['name' => 'Dewi Lestari', 'email' => 'dewi@gmail.com', 'phone' => '081234567894', 'address' => 'Yogyakarta'],
            ['name' => 'Rizky Pratama', 'email' => 'rizky@gmail.com', 'phone' => '081234567895', 'address' => 'Semarang'],
        ];

        foreach ($customersData as $data) {
            $customer = Customer::create(array_merge($data, ['created_by' => $admin->id]));

            // 3. Create Interactions for each customer
            Interaction::create([
                'customer_id' => $customer->id,
                'user_id' => $cs->id,
                'type_interaction' => 'Phone Call',
                'date' => now(),
                'notes' => 'Customer menanyakan promo tiket bioskop terbaru.',
            ]);

            // 4. Create Leads (Potensi Penjualan)
            $stages = ['Prospecting', 'Qualification', 'Proposal', 'Negotiation', 'Closed Won'];
            Lead::create([
                'customer_id' => $customer->id,
                'value' => rand(500000, 5000000),
                'stage' => $stages[array_rand($stages)],
                'notes' => 'Potensi pembelian membership tahunan.',
                'assigned_to' => $sales->id,
            ]);

            // 5. Create Tickets (Keluhan/Laporan)
            Ticket::create([
                'customer_id' => $customer->id,
                'created_by' => $cs->id,
                'issue' => 'Gagal cetak tiket di mesin self-service',
                'status_ticket' => rand(0, 1) ? 'Open' : 'Resolved',
                'description' => 'Customer sudah membayar lewat QRIS tapi kode booking tidak keluar.',
            ]);
        }
    }
}
