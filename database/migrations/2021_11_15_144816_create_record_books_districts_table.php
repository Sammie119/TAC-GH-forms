<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordBooksDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('record_books_districts', function (Blueprint $table) {
            $table->id('record_id');
            $table->string('rec_dist_area')->nullable();
            $table->string('rec_dist_district')->nullable();
            $table->string('rec_dist_prepared_by')->nullable();
            $table->string('rec_dist_year')->nullable();
            $table->string('rec_dist_period')->nullable();
            $table->string('rec_dist_w_p')->nullable();
            $table->string('rec_dist_question1', 15)->nullable();
            $table->text('rec_dist_comment1')->nullable();
            $table->string('rec_dist_question2', 15)->nullable();
            $table->text('rec_dist_comment2')->nullable();
            $table->string('rec_dist_question3', 15)->nullable();
            $table->text('rec_dist_comment3')->nullable();
            $table->string('rec_dist_question4', 15)->nullable();
            $table->text('rec_dist_comment4')->nullable();
            $table->string('rec_dist_question5', 15)->nullable();
            $table->text('rec_dist_comment5')->nullable();
            $table->string('rec_dist_question6', 15)->nullable();
            $table->text('rec_dist_comment6')->nullable();
            $table->string('rec_dist_question7', 15)->nullable();
            $table->text('rec_dist_comment7')->nullable();
            $table->string('rec_dist_question8', 15)->nullable();
            $table->text('rec_dist_comment8')->nullable();
            $table->string('rec_dist_question9', 15)->nullable();
            $table->text('rec_dist_comment9')->nullable();
            $table->string('rec_dist_question10', 15)->nullable();
            $table->text('rec_dist_comment10')->nullable();
            $table->string('rec_dist_question11', 15)->nullable();
            $table->text('rec_dist_comment11')->nullable();
            $table->string('rec_dist_question12', 15)->nullable();
            $table->text('rec_dist_comment12')->nullable();
            $table->string('rec_dist_question13', 15)->nullable();
            $table->text('rec_dist_comment13')->nullable();
            $table->string('rec_dist_question14', 15)->nullable();
            $table->text('rec_dist_comment14')->nullable();
            $table->string('rec_dist_question15', 15)->nullable();
            $table->text('rec_dist_comment15')->nullable();
            $table->string('rec_dist_question16', 15)->nullable();
            $table->text('rec_dist_comment16')->nullable();
            $table->string('rec_dist_question17', 15)->nullable();
            $table->text('rec_dist_comment17')->nullable();
            $table->string('rec_dist_question18', 15)->nullable();
            $table->text('rec_dist_comment18')->nullable();
            $table->string('rec_dist_question19', 15)->nullable();
            $table->text('rec_dist_comment19')->nullable();
            $table->string('rec_dist_question20', 15)->nullable();
            $table->text('rec_dist_comment20')->nullable();
            $table->string('rec_dist_question21', 15)->nullable();
            $table->text('rec_dist_comment21')->nullable();
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
        Schema::dropIfExists('record_books_districts');
    }
}
