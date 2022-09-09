<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ResumeSkillContent;
use Carbon\Carbon;

class ResumeSkillContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        ResumeSkillContent::truncate();
        $records = [
            [
                'id'               => 1,
                'resume_skill_id'  => 1,
                'name'             => 'Agile Project Management',
                'is_active'        => '1',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 2,
                'resume_skill_id'  => 1,
                'name'             => 'Quasar Framework',
                'is_active'        => '1',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 3,
                'resume_skill_id'  => 1,
                'name'             => 'TypeScript',
                'is_active'        => '1',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 4,
                'resume_skill_id'  => 1,
                'name'             => 'Laravel',
                'is_active'        => '1',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 5,
                'resume_skill_id'  => 1,
                'name'             => 'PHP',
                'is_active'        => '1',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 6,
                'resume_skill_id'  => 1,
                'name'             => 'Responsive Web Design',
                'is_active'        => '1',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 7,
                'resume_skill_id'  => 1,
                'name'             => 'Project Management',
                'is_active'        => '1',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 8,
                'resume_skill_id'  => 1,
                'name'             => 'Front-end Development',
                'is_active'        => '1',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 9,
                'resume_skill_id'  => 1,
                'name'             => 'Web Development',
                'is_active'        => '1',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 10,
                'resume_skill_id'  => 1,
                'name'             => 'Bootstrap',
                'is_active'        => '1',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 11,
                'resume_skill_id'  => 1,
                'name'             => 'JavaScript',
                'is_active'        => '1',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 12,
                'resume_skill_id'  => 1,
                'name'             => 'SASS',
                'is_active'        => '1',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 13,
                'resume_skill_id'  => 1,
                'name'             => 'CSS',
                'is_active'        => '1',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 14,
                'resume_skill_id'  => 1,
                'name'             => 'Git',
                'is_active'        => '1',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 15,
                'resume_skill_id'  => 1,
                'name'             => 'SCSS',
                'is_active'        => '1',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 16,
                'resume_skill_id'  => 1,
                'name'             => 'MySQL',
                'is_active'        => '1',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 17,
                'resume_skill_id'  => 1,
                'name'             => 'GitHub',
                'is_active'        => '1',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 18,
                'resume_skill_id'  => 1,
                'name'             => 'Vue.js',
                'is_active'        => '1',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 19,
                'resume_skill_id'  => 2,
                'name'             => 'Agile Project Management',
                'is_active'        => '0',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 20,
                'resume_skill_id'  => 2,
                'name'             => 'Django REST Framework',
                'is_active'        => '0',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 21,
                'resume_skill_id'  => 2,
                'name'             => 'Quasar Framework',
                'is_active'        => '0',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 22,
                'resume_skill_id'  => 2,
                'name'             => 'TypeScript',
                'is_active'        => '0',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 23,
                'resume_skill_id'  => 2,
                'name'             => 'Python',
                'is_active'        => '0',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 24,
                'resume_skill_id'  => 2,
                'name'             => 'Responsive Web Design',
                'is_active'        => '0',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 25,
                'resume_skill_id'  => 2,
                'name'             => 'Project Management',
                'is_active'        => '0',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 26,
                'resume_skill_id'  => 2,
                'name'             => 'Front-end Development',
                'is_active'        => '0',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 27,
                'resume_skill_id'  => 2,
                'name'             => 'Web Development',
                'is_active'        => '0',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 28,
                'resume_skill_id'  => 2,
                'name'             => 'Bootstrap',
                'is_active'        => '0',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 29,
                'resume_skill_id'  => 2,
                'name'             => 'JavaScript',
                'is_active'        => '0',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 30,
                'resume_skill_id'  => 2,
                'name'             => 'SASS',
                'is_active'        => '0',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 31,
                'resume_skill_id'  => 2,
                'name'             => 'CSS',
                'is_active'        => '0',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 32,
                'resume_skill_id'  => 2,
                'name'             => 'Git',
                'is_active'        => '0',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 33,
                'resume_skill_id'  => 2,
                'name'             => 'SCSS',
                'is_active'        => '0',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 34,
                'resume_skill_id'  => 2,
                'name'             => 'SQL Server',
                'is_active'        => '0',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 35,
                'resume_skill_id'  => 2,
                'name'             => 'GitHub',
                'is_active'        => '0',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 36,
                'resume_skill_id'  => 2,
                'name'             => 'Vue.js',
                'is_active'        => '0',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
        ];
        ResumeSkillContent::insert($records);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
