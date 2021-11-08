<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaSupQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_sup_questions', function (Blueprint $table) {
            $table->id('area_sup_id');
            $table->string('areasupq_name')->nullable();
            $table->date('areasupq_dob')->nullable();
            $table->tinyInteger('areasupq_year')->nullable();
            $table->date('areasupq_date_of_report')->nullable();
            $table->string('areasupq_wife', 10)->nullable();
            $table->tinyInteger('areasupq_children')->nullable();
            $table->tinyInteger('areasupq_child_age')->nullable();
            $table->text('areasupq_comment1')->nullable();
            $table->text('areasupq_comment2')->nullable();
            $table->text('areasupq_comment3')->nullable();
            $table->text('areasupq_comment4')->nullable();
            $table->text('areasupq_comment5')->nullable();
            $table->text('areasupq_comment6')->nullable();
            $table->text('areasupq_comment7')->nullable();
            $table->text('areasupq_comment8')->nullable();
            $table->text('areasupq_comment9')->nullable();
            $table->string('areasupq_name_sup')->nullable();
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
        Schema::dropIfExists('area_sup_questions');
    }
}
