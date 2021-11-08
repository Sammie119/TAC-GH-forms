<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_reports', function (Blueprint $table) {
            $table->id('member_id');
            $table->string('member_district')->nullable();
            $table->string('member_area')->nullable();
            $table->string('member_local')->nullable();
            $table->string('member_status')->nullable();
            $table->string('member_question1', 15)->nullable();
            $table->text('member_comment1')->nullable();
            $table->string('member_question2', 15)->nullable();
            $table->text('member_comment2')->nullable();
            $table->string('member_question3', 15)->nullable();
            $table->text('member_comment3')->nullable();
            $table->string('member_question4', 15)->nullable();
            $table->text('member_comment4')->nullable();
            $table->string('member_question5', 15)->nullable();
            $table->text('member_comment5')->nullable();
            $table->string('member_question6', 15)->nullable();
            $table->text('member_comment6')->nullable();
            $table->string('member_question7', 15)->nullable();
            $table->text('member_comment7')->nullable();
            $table->string('member_question8', 15)->nullable();
            $table->text('member_comment8')->nullable();
            $table->string('member_question9', 15)->nullable();
            $table->text('member_comment9')->nullable();
            $table->string('member_question10', 15)->nullable();
            $table->text('member_comment10')->nullable();
            $table->string('member_question11', 15)->nullable();
            $table->text('member_comment11')->nullable();
            $table->string('member_question12', 15)->nullable();
            $table->text('member_comment12')->nullable();
            $table->string('member_question13', 15)->nullable();
            $table->text('member_comment13')->nullable();
            $table->string('member_question14', 15)->nullable();
            $table->text('member_comment14')->nullable();
            $table->string('member_question15', 15)->nullable();
            $table->text('member_comment15')->nullable();
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
        Schema::dropIfExists('member_reports');
    }
}
