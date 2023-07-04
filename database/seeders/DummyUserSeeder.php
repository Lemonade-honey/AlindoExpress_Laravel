<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name' => 'nama admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password'=> bcrypt('12345')
            ],
            [
                'name' => 'nama staf',
                'email' => 'staf@gmail.com',
                'role' => 'staf',
                'password'=> bcrypt('12345')
            ],
            [
                'name' => 'nama kurir',
                'email' => 'kurir@gmail.com',
                'role' => 'kurir',
                'password'=> bcrypt('12345')
            ],
        ];

        // masukan ke DB
        foreach($userData as $data => $value){
            User::create($value);
        }
    }
}
