<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_assessments', function (Blueprint $table) {
            $table->id('financial_id');
            $table->string('fin_ass_district')->nullable();
            $table->string('fin_ass_area')->nullable();
            $table->string('fin_ass_local')->nullable();
            $table->string('fin_ass_status')->nullable();
            $table->string('fin_ass_month', 20)->nullable();
            $table->unsignedTinyInteger('fin_ass_year')->nullable();
            $table->unsignedDecimal('fin_ass_tithe1')->nullable();
            $table->unsignedDecimal('fin_ass_offering1')->nullable();
            $table->unsignedDecimal('fin_ass_others1')->nullable();
            $table->unsignedDecimal('fin_ass_total1')->nullable();
            $table->unsignedDecimal('fin_ass_tithe2')->nullable();
            $table->unsignedDecimal('fin_ass_offering2')->nullable();
            $table->unsignedDecimal('fin_ass_others2')->nullable();
            $table->unsignedDecimal('fin_ass_total2')->nullable();
            $table->unsignedDecimal('fin_ass_tithe3')->nullable();
            $table->unsignedDecimal('fin_ass_offering3')->nullable();
            $table->unsignedDecimal('fin_ass_others3')->nullable();
            $table->unsignedDecimal('fin_ass_total3')->nullable();
            $table->unsignedDecimal('fin_ass_tithe4')->nullable();
            $table->unsignedDecimal('fin_ass_offering4')->nullable();
            $table->unsignedDecimal('fin_ass_others4')->nullable();
            $table->unsignedDecimal('fin_ass_total4')->nullable();
            $table->unsignedDecimal('fin_ass_tithe5')->nullable();
            $table->unsignedDecimal('fin_ass_offering5')->nullable();
            $table->unsignedDecimal('fin_ass_others5')->nullable();
            $table->unsignedDecimal('fin_ass_total5')->nullable();
            $table->unsignedDecimal('fin_ass_gdtotal', 12,2)->nullable();
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
        Schema::dropIfExists('financial_assessments');
    }
}
