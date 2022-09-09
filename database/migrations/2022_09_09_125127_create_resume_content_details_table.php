<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateResumeContentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_content_details', function (Blueprint $table) {
            $table->id()->index('idx_id');
            $table->foreignId('resume_content_id')->index('idx_resume_content_id');
            $table->longText('name')->nullable(false);
            $table->timestamps();
            $table->softDeletes();
        });

        DB::unprepared(
            'ALTER TABLE `portfolio_app_db`.`resume_content_details` 
                ADD CONSTRAINT `fk_resume_content_details_id`
                FOREIGN KEY (`resume_content_id`)
                REFERENCES `portfolio_app_db`.`resume_contents` (`id`)
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
        Schema::dropIfExists('resume_content_details');
    }
}
