<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateResumeSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_sections', function (Blueprint $table) {
            $table->id()->index('idx_id');
            $table->foreignId('resume_id')->index('idx_resume_id');
            $table->longText('name')->nullable(false);
            $table->string('is_active', 3)->default('0');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::unprepared(
            'ALTER TABLE `portfolio_app_db`.`resume_sections` 
                ADD CONSTRAINT `fk_resume_sections_id`
                FOREIGN KEY (`resume_id`)
                REFERENCES `portfolio_app_db`.`resume` (`id`)
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
        Schema::dropIfExists('resume_sections');
    }
}
