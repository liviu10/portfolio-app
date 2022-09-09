<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        User::truncate();
        $records = [
            [
                'id'                => 1,
                'name'              => 'Liviu Voica',
                'email'             => 'voica.liviu10@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'          => bcrypt('123@UserWebmaster'),
                'phone_number'      => '0760469453',
                'function'          => 'Fullstack Developer',
                'location'          => 'Bucharest, Romania',
                'linkedin_url'      => 'https://www.linkedin.com/in/liviu-voica-849732a4',
                'github_url'        => 'https://github.com/liviu10',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
        ];
        User::insert($records);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
