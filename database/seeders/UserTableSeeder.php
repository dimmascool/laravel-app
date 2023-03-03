<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'password' => bcrypt('secret'),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane.doe@example.com',
                'password' => bcrypt('secret'),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Bob Smith',
                'email' => 'bob.smith@example.com',
                'password' => bcrypt('secret'),
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);
    }
}
