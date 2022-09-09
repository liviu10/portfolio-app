<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ResumeSkill;
use Carbon\Carbon;

class ResumeSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        ResumeSkill::truncate();
        $records = [
            [
                'id'         => 1,
                'resume_id'  => 1,
                'name'       => 'Fullstack with PHP & Laravel',
                'is_active'  => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'         => 2,
                'resume_id'  => 1,
                'name'       => 'Fullstack with Python & Django',
                'is_active'  => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        ResumeSkill::insert($records);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
