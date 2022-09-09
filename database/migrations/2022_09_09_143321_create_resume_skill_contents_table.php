<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateResumeSkillContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_skill_contents', function (Blueprint $table) {
            $table->id()->index('idx_id');
            $table->foreignId('resume_skill_id')->index('idx_resume_skill_id');
            $table->longText('name')->nullable(false);
            $table->string('is_active', 3)->default('0');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::unprepared(
            'ALTER TABLE `portfolio_app_db`.`resume_skill_contents` 
                ADD CONSTRAINT `fk_resume_skill_contents_id`
                FOREIGN KEY (`resume_skill_id`)
                REFERENCES `portfolio_app_db`.`resume_skills` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resume_skill_contents');
    }
}
