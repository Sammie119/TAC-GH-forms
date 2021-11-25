<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupAssessmentQuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sup_assessment_ques', function (Blueprint $table) {
            $table->id('sup_ass_id');
            $table->string('sup_ass_district')->nullable();
            $table->string('sup_ass_area')->nullable();
            $table->string('sup_ass_local')->nullable();
            $table->string('sup_ass_name')->nullable();
            $table->text('sup_ass_comment1')->nullable();
            $table->text('sup_ass_comment2')->nullable();
            $table->text('sup_ass_comment3')->nullable();
            $table->text('sup_ass_comment4')->nullable();
            $table->text('sup_ass_comment5')->nullable();
            $table->text('sup_ass_comment6')->nullable();
            $table->text('sup_ass_comment7')->nullable();
            $table->text('sup_ass_comment8')->nullable();
            $table->text('sup_ass_comment9')->nullable();
            $table->text('sup_ass_comment10')->nullable();
            $table->text('sup_ass_comment11')->nullable();
            $table->text('sup_ass_comment12')->nullable();
            $table->text('sup_ass_comment13')->nullable();
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
        Schema::dropIfExists('sup_assessment_ques');
    }
}
