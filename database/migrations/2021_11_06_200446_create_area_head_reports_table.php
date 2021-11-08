<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaHeadReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_head_reports', function (Blueprint $table) {
            $table->id('area_head_id');
            $table->string('areahead_district')->nullable();
            $table->string('areahead_area')->nullable();
            $table->string('areahead_local')->nullable();
            $table->string('areahead_status')->nullable();
            $table->text('areahead_comment1')->nullable();
            $table->text('areahead_comment2')->nullable();
            $table->text('areahead_comment3')->nullable();
            $table->text('areahead_comment4')->nullable();
            $table->text('areahead_comment5')->nullable();
            $table->text('areahead_comment6')->nullable();
            $table->string('areahead_question7', 15)->nullable();
            $table->string('areahead_question8', 15)->nullable();
            $table->string('areahead_question9', 15)->nullable();
            $table->string('areahead_question10', 15)->nullable();
            $table->string('areahead_question11', 15)->nullable();
            $table->string('areahead_question12', 15)->nullable();
            $table->string('areahead_question13', 15)->nullable();
            $table->string('areahead_question14', 15)->nullable();
            $table->text('areahead_comment14')->nullable();
            $table->string('areahead_question15', 15)->nullable();
            $table->text('areahead_comment15')->nullable();
            $table->text('areahead_comment16')->nullable();
            $table->string('areahead_question17', 15)->nullable();
            $table->text('areahead_comment17')->nullable();
            $table->text('areahead_comment18')->nullable();
            $table->text('areahead_comment19')->nullable();
            $table->text('areahead_comment20')->nullable();
            $table->text('areahead_comment21')->nullable();
            $table->integer('areahead_pastors')->nullable();
            $table->integer('areahead_elders')->nullable();
            $table->integer('areahead_deacons')->nullable();
            $table->integer('areahead_deaconesses')->nullable();
            $table->integer('areahead_adult_males')->nullable();
            $table->integer('areahead_adult_females')->nullable();
            $table->integer('areahead_children')->nullable();
            $table->integer('areahead_youth')->nullable();
            $table->integer('areahead_total_att')->nullable();
            $table->integer('areahead_tithe_payers')->nullable();
            $table->integer('areahead_active_tithe_payers')->nullable();
            $table->decimal('areahead_tithes_paid')->nullable();
            $table->decimal('areahead_oferring')->nullable();
            $table->decimal('areahead_any_oferring')->nullable();
            $table->decimal('areahead_total_tithe_off')->nullable();
            $table->string('areahead_apostle')->nullable();
            $table->string('areahead_pastor')->nullable();
            $table->integer('created_by')->references('user_id')->on('users')->onDelete('cascade');
            $table->integer('updated_by')->references('user_id')->on('users')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('area_head_reports');
    }
}
