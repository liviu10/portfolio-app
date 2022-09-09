<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ErrorAndNotificationSystemSeeder::class,
            ResumeSeeder::class,
            ResumeSectionSeeder::class,
            ResumeContentSeeder::class,
            ResumeContentDetailSeeder::class,
            ResumeSkillSeeder::class,
            ResumeSkillContentSeeder::class,
        ]);
    }
}
