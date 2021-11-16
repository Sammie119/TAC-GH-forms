<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialPoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_policies', function (Blueprint $table) {
            $table->id('financial_id');
            $table->string('fin_eva_a_area')->nullable();
            $table->string('fin_eva_a_district')->nullable();
            $table->string('fin_eva_a_local')->nullable();
            $table->string('fin_eva_a_moniter')->nullable();
            $table->string('fin_eva_a_question1a', 15)->nullable();
            $table->text('fin_eva_a_comment1a')->nullable();
            $table->string('fin_eva_a_question1b', 15)->nullable();
            $table->text('fin_eva_a_comment1b')->nullable();
            $table->string('fin_eva_a_question1c', 15)->nullable();
            $table->text('fin_eva_a_comment1c')->nullable();
            $table->string('fin_eva_a_question1d', 15)->nullable();
            $table->text('fin_eva_a_comment1d')->nullable();
            $table->string('fin_eva_a_question1e', 15)->nullable();
            $table->text('fin_eva_a_comment1e')->nullable();
            $table->string('fin_eva_a_question1f', 15)->nullable();
            $table->text('fin_eva_a_comment1f')->nullable();
            $table->string('fin_eva_a_question1g', 15)->nullable();
            $table->text('fin_eva_a_comment1g')->nullable();
            $table->string('fin_eva_a_question2a', 15)->nullable();
            $table->text('fin_eva_a_comment2a')->nullable();
            $table->string('fin_eva_a_question2b', 15)->nullable();
            $table->text('fin_eva_a_comment2b')->nullable();
            $table->string('fin_eva_a_question2c', 15)->nullable();
            $table->text('fin_eva_a_comment2c')->nullable();
            $table->string('fin_eva_a_question3a', 15)->nullable();
            $table->text('fin_eva_a_comment3a')->nullable();
            $table->string('fin_eva_a_question3b', 15)->nullable();
            $table->text('fin_eva_a_comment3b')->nullable();
            $table->string('fin_eva_a_question3c', 15)->nullable();
            $table->text('fin_eva_a_comment3c')->nullable();
            $table->string('fin_eva_a_question3d', 15)->nullable();
            $table->text('fin_eva_a_comment3d')->nullable();
            $table->string('fin_eva_a_question3e', 15)->nullable();
            $table->text('fin_eva_a_comment3e')->nullable();
            $table->string('fin_eva_a_question3f', 15)->nullable();
            $table->text('fin_eva_a_comment3f')->nullable();
            $table->string('fin_eva_a_question3g', 15)->nullable();
            $table->text('fin_eva_a_comment3g')->nullable();
            $table->string('fin_eva_a_question3h', 15)->nullable();
            $table->text('fin_eva_a_comment3h')->nullable();
            $table->string('fin_eva_a_question3i', 15)->nullable();
            $table->text('fin_eva_a_comment3i')->nullable();
            $table->string('fin_eva_a_question4a', 15)->nullable();
            $table->text('fin_eva_a_comment4a')->nullable();
            $table->text('fin_eva_a_comment4b')->nullable();
            $table->text('fin_eva_a_comment4c1')->nullable();
            $table->text('fin_eva_a_comment4c2')->nullable();
            $table->text('fin_eva_a_comment4c3')->nullable();
            $table->text('fin_eva_a_comment4d')->nullable();
            $table->text('fin_eva_a_comment4e')->nullable();
            $table->text('fin_eva_a_comment4f')->nullable();
            $table->text('fin_eva_a_comment5a')->nullable();
            $table->text('fin_eva_a_comment5b1')->nullable();
            $table->text('fin_eva_a_comment5b2')->nullable();
            $table->text('fin_eva_a_comment5b3')->nullable();
            $table->text('fin_eva_a_comment5b4')->nullable();
            $table->text('fin_eva_a_comment5c')->nullable();
            $table->string('fin_eva_a_question6a', 15)->nullable();
            $table->text('fin_eva_a_comment6a')->nullable();
            $table->text('fin_eva_a_comment6b')->nullable();
            $table->string('fin_eva_a_question6c1', 15)->nullable();
            $table->text('fin_eva_a_comment6c1')->nullable();
            $table->string('fin_eva_a_question6c2', 15)->nullable();
            $table->text('fin_eva_a_comment6c2')->nullable();
            $table->text('fin_eva_a_comment6c3')->nullable();
            $table->string('fin_eva_a_question6d', 15)->nullable();
            $table->text('fin_eva_a_comment6d')->nullable();
            $table->string('fin_eva_a_question6e', 15)->nullable();
            $table->text('fin_eva_a_comment6e')->nullable();
            $table->string('fin_eva_a_question7a1', 15)->nullable();
            $table->text('fin_eva_a_comment7a1')->nullable();
            $table->string('fin_eva_a_question7a2', 15)->nullable();
            $table->text('fin_eva_a_comment7a2')->nullable();
            $table->string('fin_eva_a_question7b1', 15)->nullable();
            $table->text('fin_eva_a_comment7b1')->nullable();
            $table->string('fin_eva_a_question7b2', 15)->nullable();
            $table->text('fin_eva_a_comment7b2')->nullable();
            $table->string('fin_eva_a_question7b3', 15)->nullable();
            $table->text('fin_eva_a_comment7b3')->nullable();
            $table->string('fin_eva_a_question7c', 15)->nullable();
            $table->text('fin_eva_a_comment7c')->nullable();
            $table->string('fin_eva_a_question7d', 15)->nullable();
            $table->text('fin_eva_a_comment7d')->nullable();
            $table->text('fin_eva_a_comment8a')->nullable();
            $table->text('fin_eva_a_comment8b')->nullable();
            $table->string('fin_eva_a_question8c', 15)->nullable();
            $table->text('fin_eva_a_comment8c')->nullable();
            $table->string('fin_eva_a_question8d', 15)->nullable();
            $table->text('fin_eva_a_comment8d')->nullable();
            $table->text('fin_eva_a_comment8e')->nullable();
            $table->text('fin_eva_a_comment8f')->nullable();
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
        Schema::dropIfExists('financial_policies');
    }
}
