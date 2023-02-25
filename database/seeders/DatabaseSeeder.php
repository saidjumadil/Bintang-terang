<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'username' => 'admin',
            'nama' => 'Admin',
            'email' => 'admin1'.'@gmail.com',
            'password' => Hash::make('password'),
            'no_hp' => '081354132233',
        ]);

        $data = [
            [
                'nama' => 'Sedan',
                'harga' => 50000,
            ],
            [
                'nama' => 'Hatchback',
                'harga' => 55000,
            ],
            [
                'nama' => 'MPV',
                'harga' => 60000,
            ],
            [
                'nama' => 'SUV',
                'harga' => 60000,
            ],
            [
                'nama' => 'Station Wagon',
                'harga' => 55000,
            ],
            [
                'nama' => 'Jeep',
                'harga' => 65000,
            ]
            ];

        DB::table('jenis_mobils')->insert($data);
    }
}
