<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictPastorQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('district_pastor_questions', function (Blueprint $table) {
            $table->id('district_pastor_id');
            $table->string('pastorques_name')->nullable();
            $table->date('pastorques_dob')->nullable();
            $table->tinyInteger('pastorques_year')->nullable();
            $table->string('pastorques_stay_length', 100)->nullable();
            $table->string('pastorques_wife', 10)->nullable();
            $table->tinyInteger('pastorques_children')->nullable();
            $table->tinyInteger('pastorques_child_age')->nullable();
            $table->tinyInteger('pastorques_child_station')->nullable();
            $table->text('pastorques_comment1')->nullable();
            $table->text('pastorques_comment2')->nullable();
            $table->text('pastorques_comment3')->nullable();
            $table->text('pastorques_comment4')->nullable();
            $table->text('pastorques_comment5')->nullable();
            $table->text('pastorques_comment6')->nullable();
            $table->text('pastorques_comment7')->nullable();
            $table->text('pastorques_comment8')->nullable();
            $table->text('pastorques_comment9')->nullable();
            $table->text('pastorques_comment10')->nullable();
            $table->text('pastorques_comment11')->nullable();
            $table->text('pastorques_comment12')->nullable();
            $table->text('pastorques_comment13')->nullable();
            $table->text('pastorques_comment14')->nullable();
            $table->string('pastorques_name_dist')->nullable();
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
        Schema::dropIfExists('district_pastor_questions');
    }
}
