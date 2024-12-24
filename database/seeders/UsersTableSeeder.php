<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Menggunakan Faker untuk membuat data dummy
        $faker = Faker::create();

        // Membuat 10 pengguna baru
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'userID' => $faker->unique()->uuid, // Menggunakan UUID untuk userID
                'password' => Hash::make('password123'), // Pastikan password dienkripsi
                'firstname' => $faker->firstName, // Menggunakan Faker untuk nama depan
                'lastname' => $faker->lastName, // Menggunakan Faker untuk nama belakang
                'phone' => $faker->phoneNumber, // Menggunakan Faker untuk nomor telepon
                'email' => $faker->unique()->safeEmail, // Menggunakan Faker untuk email yang unik
                'tanggalLahir' => $faker->date(), // Menggunakan Faker untuk tanggal lahir
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
