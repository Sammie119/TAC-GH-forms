<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrowthQuestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('growth_questionnaires', function (Blueprint $table) {
            $table->id('growth_id');
            $table->string('growthque_district')->nullable();
            $table->string('growthque_area')->nullable();
            $table->string('growthque_local')->nullable();
            $table->string('growthque_status')->nullable();
            $table->string('growthque_question1', 15)->nullable();
            $table->text('growthque_comment1')->nullable();
            $table->string('growthque_question2', 15)->nullable();
            $table->text('growthque_comment2')->nullable();
            $table->string('growthque_question3', 15)->nullable();
            $table->text('growthque_comment3')->nullable();
            $table->string('growthque_question4', 15)->nullable();
            $table->text('growthque_comment4')->nullable();
            $table->string('growthque_question5', 15)->nullable();
            $table->text('growthque_comment5')->nullable();
            $table->string('growthque_question6', 15)->nullable();
            $table->text('growthque_comment6')->nullable();
            $table->string('growthque_question7', 15)->nullable();
            $table->text('growthque_comment7')->nullable();
            $table->string('growthque_question8', 15)->nullable();
            $table->text('growthque_comment8')->nullable();
            $table->string('growthque_question9', 15)->nullable();
            $table->text('growthque_comment9')->nullable();
            $table->string('growthque_question10', 15)->nullable();
            $table->text('growthque_comment10')->nullable();
            $table->string('growthque_question11', 15)->nullable();
            $table->text('growthque_comment11')->nullable();
            $table->string('growthque_question12', 15)->nullable();
            $table->text('growthque_comment12')->nullable();
            $table->string('growthque_question13', 15)->nullable();
            $table->text('growthque_comment13')->nullable();
            $table->string('growthque_question14', 15)->nullable();
            $table->text('growthque_comment14')->nullable();
            $table->string('growthque_question15', 15)->nullable();
            $table->text('growthque_comment15')->nullable();
            $table->string('growthque_question16', 15)->nullable();
            $table->text('growthque_comment16')->nullable();
            $table->string('growthque_question17', 15)->nullable();
            $table->text('growthque_comment17')->nullable();
            $table->text('growthque_comment18')->nullable();
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
        Schema::dropIfExists('growth_questionnaires');
    }
}
