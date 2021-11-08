<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalLevelQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local_level_questions', function (Blueprint $table) {
            $table->id('local_level_id');
            $table->string('llm_district')->nullable();
            $table->string('llm_area')->nullable();
            $table->string('llm_local')->nullable();
            $table->string('llm_status')->nullable();
            $table->string('llm_question1', 15)->nullable();
            $table->text('llm_comment1')->nullable();
            $table->string('llm_question2', 15)->nullable();
            $table->text('llm_comment2')->nullable();
            $table->string('llm_question3', 15)->nullable();
            $table->text('llm_comment3')->nullable();
            $table->string('llm_question4', 15)->nullable();
            $table->text('llm_comment4')->nullable();
            $table->string('llm_question5', 15)->nullable();
            $table->text('llm_comment5')->nullable();
            $table->string('llm_question6', 15)->nullable();
            $table->text('llm_comment6')->nullable();
            $table->string('llm_question7', 15)->nullable();
            $table->text('llm_comment7')->nullable();
            $table->string('llm_question8', 15)->nullable();
            $table->text('llm_comment8')->nullable();
            $table->string('llm_question9', 15)->nullable();
            $table->text('llm_comment9')->nullable();
            $table->string('llm_question10', 15)->nullable();
            $table->text('llm_comment10')->nullable();
            $table->string('llm_question11', 15)->nullable();
            $table->text('llm_comment11')->nullable();
            $table->string('llm_question12', 15)->nullable();
            $table->text('llm_comment12')->nullable();
            $table->string('llm_question13', 15)->nullable();
            $table->text('llm_comment13')->nullable();
            $table->string('llm_question14', 15)->nullable();
            $table->text('llm_comment14')->nullable();
            $table->string('llm_question15', 15)->nullable();
            $table->text('llm_comment15')->nullable();
            $table->string('llm_question16', 15)->nullable();
            $table->text('llm_comment16')->nullable();
            $table->string('llm_question17', 15)->nullable();
            $table->text('llm_comment17')->nullable();
            $table->string('llm_question18', 15)->nullable();
            $table->text('llm_comment18')->nullable();
            $table->string('llm_question19', 15)->nullable();
            $table->text('llm_comment19')->nullable();
            $table->string('llm_question20', 15)->nullable();
            $table->text('llm_comment20')->nullable();
            $table->string('llm_question21', 15)->nullable();
            $table->text('llm_comment21')->nullable();
            $table->string('llm_question22', 15)->nullable();
            $table->text('llm_comment22')->nullable();
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
        Schema::dropIfExists('local_level_questions');
    }
}
