<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\ResumeSection;
use Carbon\Carbon;

use Illuminate\Database\Seeder;

class ResumeSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        ResumeSection::truncate();
        $records = [
            [
                'id'         => 1,
                'resume_id'  => 1,
                'name'       => 'Experience',
                'is_active'  => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'         => 2,
                'resume_id'  => 1,
                'name'       => 'Education',
                'is_active'  => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'         => 3,
                'resume_id'  => 1,
                'name'       => 'Licenses & Certifications',
                'is_active'  => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'         => 4,
                'resume_id'  => 1,
                'name'       => 'Skills',
                'is_active'  => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        ResumeSection::insert($records);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
