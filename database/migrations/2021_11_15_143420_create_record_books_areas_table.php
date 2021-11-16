<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordBooksAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('record_books_areas', function (Blueprint $table) {
            $table->id('record_id');
            $table->string('rec_area_area')->nullable();
            $table->string('rec_area_prepared_by')->nullable();
            $table->string('rec_area_year')->nullable();
            $table->string('rec_area_period')->nullable();
            $table->string('rec_area_w_p')->nullable();
            $table->string('rec_area_question1', 15)->nullable();
            $table->text('rec_area_comment1')->nullable();
            $table->string('rec_area_question2', 15)->nullable();
            $table->text('rec_area_comment2')->nullable();
            $table->string('rec_area_question3', 15)->nullable();
            $table->text('rec_area_comment3')->nullable();
            $table->string('rec_area_question4', 15)->nullable();
            $table->text('rec_area_comment4')->nullable();
            $table->string('rec_area_question5', 15)->nullable();
            $table->text('rec_area_comment5')->nullable();
            $table->string('rec_area_question6', 15)->nullable();
            $table->text('rec_area_comment6')->nullable();
            $table->string('rec_area_question7', 15)->nullable();
            $table->text('rec_area_comment7')->nullable();
            $table->string('rec_area_question8', 15)->nullable();
            $table->text('rec_area_comment8')->nullable();
            $table->string('rec_area_question9', 15)->nullable();
            $table->text('rec_area_comment9')->nullable();
            $table->string('rec_area_question10', 15)->nullable();
            $table->text('rec_area_comment10')->nullable();
            $table->string('rec_area_question11', 15)->nullable();
            $table->text('rec_area_comment11')->nullable();
            $table->string('rec_area_question12', 15)->nullable();
            $table->text('rec_area_comment12')->nullable();
            $table->string('rec_area_question13', 15)->nullable();
            $table->text('rec_area_comment13')->nullable();
            $table->string('rec_area_question14', 15)->nullable();
            $table->text('rec_area_comment14')->nullable();
            $table->string('rec_area_question15', 15)->nullable();
            $table->text('rec_area_comment15')->nullable();
            $table->string('rec_area_question16', 15)->nullable();
            $table->text('rec_area_comment16')->nullable();
            $table->string('rec_area_question17', 15)->nullable();
            $table->text('rec_area_comment17')->nullable();
            $table->string('rec_area_question18', 15)->nullable();
            $table->text('rec_area_comment18')->nullable();
            $table->string('rec_area_question19', 15)->nullable();
            $table->text('rec_area_comment19')->nullable();
            $table->string('rec_area_question20', 15)->nullable();
            $table->text('rec_area_comment20')->nullable();
            $table->string('rec_area_question21', 15)->nullable();
            $table->text('rec_area_comment21')->nullable();
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
        Schema::dropIfExists('record_books_areas');
    }
}
