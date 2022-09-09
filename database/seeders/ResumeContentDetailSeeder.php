<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\ResumeContentDetail;
use Carbon\Carbon;

use Illuminate\Database\Seeder;

class ResumeContentDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        ResumeContentDetail::truncate();
        $records = [
            [
                'id'                 => 1,
                'resume_content_id'  => 1,
                'name'               => 'Fullstack Developer',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 2,
                'resume_content_id'  => 1,
                'name'               => 'TEILOR · Full-time',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 3,
                'resume_content_id'  => 1,
                'name'               => 'Jan 2022 - Present',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 5,
                'resume_content_id'  => 1,
                'name'               => 'Bucharest, Romania',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 6,
                'resume_content_id'  => 1,
                'name'               => 'Developed and maintained internal web applications for various departments (finance, sales, marketing etc.)',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 7,
                'resume_content_id'  => 1,
                'name'               => 'Implemented the web application’s pages design',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 8,
                'resume_content_id'  => 1,
                'name'               => 'Participated in Agile meetings',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 9,
                'resume_content_id'  => 1,
                'name'               => 'Skills: Agile Project Management · Django REST Framework · Quasar Framework · TypeScript · Python (Programming Language) · Vue.js',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 10,
                'resume_content_id'  => 2,
                'name'               => 'Freelance Full Stack Developer',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 11,
                'resume_content_id'  => 2,
                'name'               => 'Freelance',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 12,
                'resume_content_id'  => 2,
                'name'               => 'Feb 2020 - Present',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 13,
                'resume_content_id'  => 2,
                'name'               => 'Bucharest, Romania',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 14,
                'resume_content_id'  => 2,
                'name'               => 'Developed a SASS Personal Library that has different HTML & CSS reusable components; Created and designed “Intelligent Garden” web application (with Laravel and Bootstrap) for a client that wanted to have a better image over his garden metrics (pH, Water Level and Electrical Conductivity sensors information)',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 15,
                'resume_content_id'  => 2,
                'name'               => 'Created and designed a presentation website application for a client that wanted to open up a dancing school (with Laravel, Bootstrap and VueJs)',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 16,
                'resume_content_id'  => 2,
                'name'               => 'Created a scaffolding project “Laravel Scaffolding Application” that can be used in future projects (with Laravel, Bootstrap and VueJs)',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 17,
                'resume_content_id'  => 2,
                'name'               => 'Created and designed a presentation website application for a client that wanted to offer his services as a professional wedding photographer (with Laravel, Bootstrap and VueJs)',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 18,
                'resume_content_id'  => 2,
                'name'               => 'Skills: Laravel · PHP · Bootstrap · Cascading Style Sheets (CSS) · MySQL · Vue.js',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 19,
                'resume_content_id'  => 3,
                'name'               => 'Fullstack Developer',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 20,
                'resume_content_id'  => 3,
                'name'               => 'S.C. Soft Dreams S.R.L.',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 21,
                'resume_content_id'  => 3,
                'name'               => 'May 2021 - Jan 2022',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 22,
                'resume_content_id'  => 3,
                'name'               => 'Bucharest, Romania',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 23,
                'resume_content_id'  => 3,
                'name'               => 'Developed and maintained a Laravel & VueJs online store for a client who is selling various test blood analysis worldwide',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 24,
                'resume_content_id'  => 3,
                'name'               => 'Weekly brainstorm meetings with my colleagues',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 25,
                'resume_content_id'  => 3,
                'name'               => 'Maintained a .NET project for a client who wanted to have a hotel booking platform where companies can plan the next conference',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 26,
                'resume_content_id'  => 3,
                'name'               => 'Skills: Laravel · PHP · MySQL · Vue.js',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 27,
                'resume_content_id'  => 4,
                'name'               => 'Academia de Studii Economice din Bucuresti',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 28,
                'resume_content_id'  => 4,
                'name'               => 'Master of Business Administration (M.B.A.), Business Administration and Management',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 29,
                'resume_content_id'  => 4,
                'name'               => '2012 - 2014',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 30,
                'resume_content_id'  => 4,
                'name'               => 'Activities and societies: Setting up a company and an online store.',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 31,
                'resume_content_id'  => 5,
                'name'               => 'Academia de Studii Economice din Bucuresti',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 32,
                'resume_content_id'  => 5,
                'name'               => 'Bachelor of Business Administration (B.B.A.), Business Administration, Management and Operations',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 33,
                'resume_content_id'  => 5,
                'name'               => '2009 - 2012',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 34,
                'resume_content_id'  => 5,
                'name'               => 'Activities and societies: Comparative Analysis of Means of Transportation between European Countries',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 35,
                'resume_content_id'  => 6,
                'name'               => 'Advanced Database and SQL Querying',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 36,
                'resume_content_id'  => 6,
                'name'               => 'Udemy',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 37,
                'resume_content_id'  => 6,
                'name'               => 'Issued Jan 2021 · No Expiration Date',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 38,
                'resume_content_id'  => 7,
                'name'               => 'Learn PHP from Scratch with two practice projects',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 39,
                'resume_content_id'  => 7,
                'name'               => 'Udemy',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 40,
                'resume_content_id'  => 7,
                'name'               => 'Issued Dec 2020 · No Expiration Date',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 41,
                'resume_content_id'  => 8,
                'name'               => '50 projects in 50 Days - HTML, CSS & Javascript',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 42,
                'resume_content_id'  => 8,
                'name'               => 'Udemy',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 43,
                'resume_content_id'  => 8,
                'name'               => 'Issued Nov 2020 · No Expiration Date',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 44,
                'resume_content_id'  => 9,
                'name'               => 'HTML5 and CSS3 Fundamentals',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 45,
                'resume_content_id'  => 9,
                'name'               => 'Udemy',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 46,
                'resume_content_id'  => 9,
                'name'               => 'Issued Nov 2020 · No Expiration Date',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 47,
                'resume_content_id'  => 10,
                'name'               => 'PHP for Beginners - Become a PHP Master - CMS Project',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 48,
                'resume_content_id'  => 10,
                'name'               => 'Udemy',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 49,
                'resume_content_id'  => 10,
                'name'               => 'Issued Aug 2020 · No Expiration Date',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 50,
                'resume_content_id'  => 11,
                'name'               => 'The Web Developer Bootcamp',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 51,
                'resume_content_id'  => 11,
                'name'               => 'Udemy',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 52,
                'resume_content_id'  => 11,
                'name'               => 'Issued Aug 2020 · No Expiration Date',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 53,
                'resume_content_id'  => 12,
                'name'               => 'PHP Advanced',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 54,
                'resume_content_id'  => 12,
                'name'               => 'BIT Academy',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 55,
                'resume_content_id'  => 12,
                'name'               => 'Issued Feb 2019 · No Expiration Date',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 56,
                'resume_content_id'  => 12,
                'name'               => 'Credential ID 0000008509',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 57,
                'resume_content_id'  => 13,
                'name'               => 'PHP Fundamentals',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 58,
                'resume_content_id'  => 13,
                'name'               => 'BIT Academy',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 59,
                'resume_content_id'  => 13,
                'name'               => 'Issued Dec 2018 · No Expiration Date',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 60,
                'resume_content_id'  => 13,
                'name'               => 'Credential ID 0000007571',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 61,
                'resume_content_id'  => 14,
                'name'               => 'WEB Design',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 62,
                'resume_content_id'  => 14,
                'name'               => 'BIT Academy',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 63,
                'resume_content_id'  => 14,
                'name'               => 'Issued Dec 2018 · No Expiration Date',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 64,
                'resume_content_id'  => 14,
                'name'               => 'Credential ID 000008160',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 65,
                'resume_content_id'  => 15,
                'name'               => 'Programator Automatizari si VBA in Excel',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 66,
                'resume_content_id'  => 15,
                'name'               => 'ABSOLUTE SCHOOL',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 67,
                'resume_content_id'  => 15,
                'name'               => 'Issued Feb 2017 · No Expiration Date',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 68,
                'resume_content_id'  => 15,
                'name'               => 'Credential ID 00099321',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 69,
                'resume_content_id'  => 16,
                'name'               => 'Programator SQL',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 70,
                'resume_content_id'  => 16,
                'name'               => 'ABSOLUTE SCHOOL',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 71,
                'resume_content_id'  => 16,
                'name'               => 'Issued Feb 2017 · No Expiration Date',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
            [
                'id'                 => 72,
                'resume_content_id'  => 16,
                'name'               => 'Credential ID 00099331',
                'is_active'          => '1',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
        ];
        ResumeContentDetail::insert($records);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
