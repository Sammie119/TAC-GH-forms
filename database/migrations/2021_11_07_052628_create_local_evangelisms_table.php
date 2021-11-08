<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalEvangelismsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local_evangelisms', function (Blueprint $table) {
            $table->id('local_evang_id');
            $table->string('evange_district')->nullable();
            $table->string('evange_area')->nullable();
            $table->string('evange_local')->nullable();
            $table->string('evange_status')->nullable();
            $table->string('evange_question1', 15)->nullable();
            $table->text('evange_comment1')->nullable();
            $table->string('evange_question2', 15)->nullable();
            $table->text('evange_comment2')->nullable();
            $table->string('evange_question3', 15)->nullable();
            $table->text('evange_comment3')->nullable();
            $table->string('evange_question4', 15)->nullable();
            $table->text('evange_comment4')->nullable();
            $table->string('evange_question5', 15)->nullable();
            $table->text('evange_comment5')->nullable();
            $table->string('evange_question6', 15)->nullable();
            $table->text('evange_comment6')->nullable();
            $table->string('evange_question7', 15)->nullable();
            $table->text('evange_comment7')->nullable();
            $table->string('evange_question8', 15)->nullable();
            $table->text('evange_comment8')->nullable();
            $table->string('evange_question9', 15)->nullable();
            $table->text('evange_comment9')->nullable();
            $table->string('evange_question10', 15)->nullable();
            $table->text('evange_comment10')->nullable();
            $table->string('evange_question11', 15)->nullable();
            $table->text('evange_comment11')->nullable();
            $table->string('evange_question12', 15)->nullable();
            $table->text('evange_comment12')->nullable();
            $table->string('evange_question13', 15)->nullable();
            $table->text('evange_comment13')->nullable();
            $table->string('evange_question14', 15)->nullable();
            $table->text('evange_comment14')->nullable();
            $table->string('evange_question15', 15)->nullable();
            $table->text('evange_comment15')->nullable();
            $table->string('evange_question16', 15)->nullable();
            $table->text('evange_comment16')->nullable();
            $table->string('evange_question17', 15)->nullable();
            $table->text('evange_comment17')->nullable();
            $table->string('evange_question18', 15)->nullable();
            $table->text('evange_comment18')->nullable();
            $table->string('evange_name')->nullable();
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
        Schema::dropIfExists('local_evangelisms');
    }
}
