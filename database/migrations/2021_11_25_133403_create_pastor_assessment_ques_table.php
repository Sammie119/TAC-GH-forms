<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePastorAssessmentQuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pastor_assessment_ques', function (Blueprint $table) {
            $table->id('pastor_ass_id');
            $table->string('past_ass_district')->nullable();
            $table->string('past_ass_area')->nullable();
            $table->string('past_ass_local')->nullable();
            $table->string('past_ass_name')->nullable();
            $table->text('past_ass_comment1')->nullable();
            $table->text('past_ass_comment2')->nullable();
            $table->text('past_ass_comment3')->nullable();
            $table->text('past_ass_comment4')->nullable();
            $table->text('past_ass_comment5')->nullable();
            $table->text('past_ass_comment6')->nullable();
            $table->text('past_ass_comment7')->nullable();
            $table->text('past_ass_comment8')->nullable();
            $table->text('past_ass_comment9')->nullable();
            $table->text('past_ass_comment10')->nullable();
            $table->text('past_ass_comment11')->nullable();
            $table->text('past_ass_comment12')->nullable();
            $table->text('past_ass_comment13')->nullable();
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
        Schema::dropIfExists('pastor_assessment_ques');
    }
}
