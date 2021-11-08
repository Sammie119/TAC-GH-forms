<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictLevelMonotersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('district_level_monoters', function (Blueprint $table) {
            $table->id('district_level_id');
            $table->string('dlm_district')->nullable();
            $table->string('dlm_area')->nullable();
            $table->string('dlm_local')->nullable();
            $table->string('dlm_status')->nullable();
            $table->string('dlm_question1', 15)->nullable();
            $table->text('dlm_comment1')->nullable();
            $table->string('dlm_question2', 15)->nullable();
            $table->text('dlm_comment2')->nullable();
            $table->string('dlm_question3', 15)->nullable();
            $table->text('dlm_comment3')->nullable();
            $table->string('dlm_question4', 15)->nullable();
            $table->text('dlm_comment4')->nullable();
            $table->string('dlm_question5', 15)->nullable();
            $table->text('dlm_comment5')->nullable();
            $table->string('dlm_question6', 15)->nullable();
            $table->text('dlm_comment6')->nullable();
            $table->string('dlm_question7', 15)->nullable();
            $table->text('dlm_comment7')->nullable();
            $table->string('dlm_question8', 15)->nullable();
            $table->text('dlm_comment8')->nullable();
            $table->string('dlm_question9', 15)->nullable();
            $table->text('dlm_comment9')->nullable();
            $table->string('dlm_question10', 15)->nullable();
            $table->text('dlm_comment10')->nullable();
            $table->string('dlm_question11', 15)->nullable();
            $table->text('dlm_comment11')->nullable();
            $table->string('dlm_question12', 15)->nullable();
            $table->text('dlm_comment12')->nullable();
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
        Schema::dropIfExists('district_level_monoters');
    }
}
