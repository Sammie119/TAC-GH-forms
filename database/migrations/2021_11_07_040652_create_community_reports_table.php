<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunityReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('community_reports', function (Blueprint $table) {
            $table->id('community_id');
            $table->string('commrep_district')->nullable();
            $table->string('commrep_area')->nullable();
            $table->string('commrep_local')->nullable();
            $table->string('commrep_status')->nullable();
            $table->text('commrep_comment1')->nullable();
            $table->text('commrep_comment2')->nullable();
            $table->string('commrep_question3', 15)->nullable();
            $table->text('commrep_comment3')->nullable();
            $table->string('commrep_question4', 15)->nullable();
            $table->text('commrep_comment4')->nullable();
            $table->string('commrep_question5', 15)->nullable();
            $table->text('commrep_comment5')->nullable();
            $table->string('commrep_question6', 15)->nullable();
            $table->text('commrep_comment6')->nullable();
            $table->string('commrep_question7', 15)->nullable();
            $table->text('commrep_comment7')->nullable();
            $table->string('commrep_question8', 15)->nullable();
            $table->text('commrep_comment8')->nullable();
            $table->string('commrep_question9', 15)->nullable();
            $table->text('commrep_comment9')->nullable();
            $table->string('commrep_question10', 15)->nullable();
            $table->text('commrep_comment10')->nullable();
            $table->string('commrep_question11', 15)->nullable();
            $table->text('commrep_comment11')->nullable();
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
        Schema::dropIfExists('community_reports');
    }
}
