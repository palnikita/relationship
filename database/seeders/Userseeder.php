<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\contacts;


class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'nikki',
            'email' => 'jdkjjhjhhd@.com',
            'password' => bcrypt('password')

        ]);
        contacts::create([
            'user_id' => '1',
            'address' => 'jdkjdk',
            'phoneno' => '4883873'

        ]);

    }
}
