<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\ResumeContent;
use Carbon\Carbon;

use Illuminate\Database\Seeder;

class ResumeContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        ResumeContent::truncate();
        $records = [
            [
                'id'                 => 1,
                'resume_section_id'  => 1,
                'name'               => 'First experience',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 2,
                'resume_section_id'  => 1,
                'name'               => 'Second experience',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 3,
                'resume_section_id'  => 1,
                'name'               => 'Third experience',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 4,
                'resume_section_id'  => 2,
                'name'               => 'First education',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 5,
                'resume_section_id'  => 2,
                'name'               => 'Second education',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 6,
                'resume_section_id'  => 3,
                'name'               => 'First license & certification',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 7,
                'resume_section_id'  => 3,
                'name'               => 'Second license & certification',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 8,
                'resume_section_id'  => 3,
                'name'               => 'Third license & certification',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 9,
                'resume_section_id'  => 3,
                'name'               => 'Forth license & certification',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 10,
                'resume_section_id'  => 3,
                'name'               => 'Fifth license & certification',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 11,
                'resume_section_id'  => 3,
                'name'               => 'Sixth license & certification',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 12,
                'resume_section_id'  => 3,
                'name'               => 'Seventh license & certification',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 13,
                'resume_section_id'  => 3,
                'name'               => 'Eight license & certification',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 14,
                'resume_section_id'  => 3,
                'name'               => 'Ninth license & certification',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 15,
                'resume_section_id'  => 3,
                'name'               => 'Ten license & certification',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 16,
                'resume_section_id'  => 3,
                'name'               => 'Eleven license & certification',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
        ];
        ResumeContent::insert($records);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
