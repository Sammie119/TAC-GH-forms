<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcurementPoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procurement_policies', function (Blueprint $table) {
            $table->id('procurement_id');
            $table->string('fin_eva_b_area', 15)->nullable();
            $table->string('fin_eva_b_district', 15)->nullable();
            $table->string('fin_eva_b_local', 15)->nullable();
            $table->string('fin_eva_b_moniter', 15)->nullable();
            $table->text('fin_eva_b_comment1a')->nullable();
            $table->string('fin_eva_b_question1b', 15)->nullable();
            $table->text('fin_eva_b_comment1b')->nullable();
            $table->string('fin_eva_b_question1c', 15)->nullable();
            $table->text('fin_eva_b_comment1c')->nullable();
            $table->string('fin_eva_b_question1d', 15)->nullable();
            $table->text('fin_eva_b_comment1d')->nullable();
            $table->text('fin_eva_b_comment2a')->nullable();
            $table->string('fin_eva_b_question2b', 15)->nullable();
            $table->text('fin_eva_b_comment2b')->nullable();
            $table->string('fin_eva_b_question2c', 15)->nullable();
            $table->text('fin_eva_b_comment2c')->nullable();
            $table->text('fin_eva_b_comment2d')->nullable();
            $table->string('fin_eva_b_question3a', 15)->nullable();
            $table->text('fin_eva_b_comment3a')->nullable();
            $table->text('fin_eva_b_comment3b')->nullable();
            $table->string('fin_eva_b_question3c', 15)->nullable();
            $table->text('fin_eva_b_comment3c')->nullable();
            $table->text('fin_eva_b_comment3d')->nullable();
            $table->string('fin_eva_b_question4a', 15)->nullable();
            $table->text('fin_eva_b_comment4a')->nullable();
            $table->text('fin_eva_b_comment4b')->nullable();
            $table->string('fin_eva_b_question4c', 15)->nullable();
            $table->text('fin_eva_b_comment4c')->nullable();
            $table->string('fin_eva_b_question5a', 15)->nullable();
            $table->text('fin_eva_b_comment5a')->nullable();
            $table->string('fin_eva_b_question5b', 15)->nullable();
            $table->text('fin_eva_b_comment5b')->nullable();
            $table->string('fin_eva_b_question5c', 15)->nullable();
            $table->text('fin_eva_b_comment5c')->nullable();
            $table->text('fin_eva_b_comment5d')->nullable();
            $table->string('fin_eva_b_question6a', 15)->nullable();
            $table->text('fin_eva_b_comment6a')->nullable();
            $table->string('fin_eva_b_question6b', 15)->nullable();
            $table->text('fin_eva_b_comment6b')->nullable();
            $table->string('fin_eva_b_question6c', 15)->nullable();
            $table->text('fin_eva_b_comment6c')->nullable();
            $table->string('fin_eva_b_question7a', 15)->nullable();
            $table->text('fin_eva_b_comment7a')->nullable();
            $table->text('fin_eva_b_comment7b')->nullable();
            $table->text('fin_eva_b_comment7c')->nullable();
            $table->text('fin_eva_b_comment7d')->nullable();
            $table->string('fin_eva_b_question8a', 15)->nullable();
            $table->text('fin_eva_b_comment8a')->nullable();
            $table->string('fin_eva_b_question8b', 15)->nullable();
            $table->text('fin_eva_b_comment8b')->nullable();
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
        Schema::dropIfExists('procurement_policies');
    }
}
