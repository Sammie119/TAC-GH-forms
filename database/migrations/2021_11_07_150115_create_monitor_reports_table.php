<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitorReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitor_reports', function (Blueprint $table) {
            $table->id('monitor_id');
            $table->string('monirep_district')->nullable();
            $table->string('monirep_area')->nullable();
            $table->string('monirep_local')->nullable();
            $table->string('monirep_status')->nullable();
            $table->string('monirep_question1', 15)->nullable();
            $table->text('monirep_comment1')->nullable();
            $table->string('monirep_question2', 15)->nullable();
            $table->text('monirep_comment2')->nullable();
            $table->text('monirep_comment3')->nullable();
            $table->text('monirep_comment4')->nullable();
            $table->string('monirep_question5', 15)->nullable();
            $table->text('monirep_comment5')->nullable();
            $table->string('monirep_question6', 15)->nullable();
            $table->text('monirep_comment6')->nullable();
            $table->string('monirep_question7', 15)->nullable();
            $table->string('monirep_question8', 15)->nullable();
            $table->string('monirep_question9', 15)->nullable();
            $table->string('monirep_question10', 15)->nullable();
            $table->string('monirep_question11', 15)->nullable();
            $table->string('monirep_question12', 15)->nullable();
            $table->text('monirep_comment13')->nullable();
            $table->text('monirep_comment14')->nullable();
            $table->integer('monirep_pastors')->nullable();
            $table->integer('monirep_elders')->nullable();
            $table->integer('monirep_deacons')->nullable();
            $table->integer('monirep_deaconesses')->nullable();
            $table->integer('monirep_adult_males')->nullable();
            $table->integer('monirep_adult_females')->nullable();
            $table->integer('monirep_children')->nullable();
            $table->integer('monirep_youth')->nullable();
            $table->integer('monirep_total_att')->nullable();
            $table->integer('monirep_tithe_payers')->nullable();
            $table->decimal('monirep_tithes_paid')->nullable();
            $table->decimal('monirep_oferring')->nullable();
            $table->decimal('monirep_total_tithe_off')->nullable();
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
        Schema::dropIfExists('monitor_reports');
    }
}
