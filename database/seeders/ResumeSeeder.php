<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Resume;
use Carbon\Carbon;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Resume::truncate();
        $records = [
            [
                'id'         => 1,
                'name'       => 'Web development Resume',
                'is_active'  => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        Resume::insert($records);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
