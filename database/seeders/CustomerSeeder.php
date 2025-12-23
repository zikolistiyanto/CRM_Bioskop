<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $users = User::all();

        // Pastikan ada user sebagai created_by
        if($users->isEmpty()){
            $this->command->info("Seeder user harus dijalankan dulu!");
            return;
        }

        for($i=1; $i<=10; $i++){
            Customer::create([
                'name' => $faker->name,
                'phone' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'address' => $faker->address,
                'status' => $faker->randomElement(['active','inactive']),
                'created_by' => $users->random()->id_user,
            ]);
        }
    }
}
