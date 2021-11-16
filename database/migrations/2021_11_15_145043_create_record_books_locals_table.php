<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordBooksLocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('record_books_locals', function (Blueprint $table) {
            $table->id('record_id');
            $table->string('rec_local_area')->nullable();
            $table->string('rec_local_district')->nullable();
            $table->string('rec_local_local')->nullable();
            $table->string('rec_local_prepared_by')->nullable();
            $table->string('rec_local_year')->nullable();
            $table->string('rec_local_period')->nullable();
            $table->string('rec_local_w_p')->nullable();
            $table->string('rec_local_question1', 15)->nullable();
            $table->text('rec_local_comment1')->nullable();
            $table->string('rec_local_question2', 15)->nullable();
            $table->text('rec_local_comment2')->nullable();
            $table->string('rec_local_question3', 15)->nullable();
            $table->text('rec_local_comment3')->nullable();
            $table->string('rec_local_question4', 15)->nullable();
            $table->text('rec_local_comment4')->nullable();
            $table->string('rec_local_question5', 15)->nullable();
            $table->text('rec_local_comment5')->nullable();
            $table->string('rec_local_question6', 15)->nullable();
            $table->text('rec_local_comment6')->nullable();
            $table->string('rec_local_question7', 15)->nullable();
            $table->text('rec_local_comment7')->nullable();
            $table->string('rec_local_question8', 15)->nullable();
            $table->text('rec_local_comment8')->nullable();
            $table->string('rec_local_question9', 15)->nullable();
            $table->text('rec_local_comment9')->nullable();
            $table->string('rec_local_question10', 15)->nullable();
            $table->text('rec_local_comment10')->nullable();
            $table->string('rec_local_question11', 15)->nullable();
            $table->text('rec_local_comment11')->nullable();
            $table->string('rec_local_question12', 15)->nullable();
            $table->text('rec_local_comment12')->nullable();
            $table->string('rec_local_question13', 15)->nullable();
            $table->text('rec_local_comment13')->nullable();
            $table->string('rec_local_question14', 15)->nullable();
            $table->text('rec_local_comment14')->nullable();
            $table->string('rec_local_question15', 15)->nullable();
            $table->text('rec_local_comment15')->nullable();
            $table->string('rec_local_question16', 15)->nullable();
            $table->text('rec_local_comment16')->nullable();
            $table->string('rec_local_question17', 15)->nullable();
            $table->text('rec_local_comment17')->nullable();
            $table->string('rec_local_question18', 15)->nullable();
            $table->text('rec_local_comment18')->nullable();
            $table->string('rec_local_question19', 15)->nullable();
            $table->text('rec_local_comment19')->nullable();
            $table->string('rec_local_question20', 15)->nullable();
            $table->text('rec_local_comment20')->nullable();
            $table->string('rec_local_question21', 15)->nullable();
            $table->text('rec_local_comment21')->nullable();
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
        Schema::dropIfExists('record_books_locals');
    }
}
