<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictPastorReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('district_pastor_reports', function (Blueprint $table) {
            $table->id('district_pastor_id');
            $table->string('distpast_district')->nullable();
            $table->string('distpast_area')->nullable();
            $table->string('distpast_local')->nullable();
            $table->string('distpast_status')->nullable();
            $table->text('distpast_comment1')->nullable();
            $table->text('distpast_comment2')->nullable();
            $table->text('distpast_comment3')->nullable();
            $table->text('distpast_comment4')->nullable();
            $table->text('distpast_comment5')->nullable();
            $table->string('distpast_question6', 15)->nullable();
            $table->string('distpast_question7', 15)->nullable();
            $table->string('distpast_question8', 15)->nullable();
            $table->string('distpast_question9', 15)->nullable();
            $table->string('distpast_question10', 15)->nullable();
            $table->string('distpast_question11', 15)->nullable();
            $table->string('distpast_question12', 15)->nullable();
            $table->string('distpast_question13', 15)->nullable();
            $table->text('distpast_comment13')->nullable();
            $table->text('distpast_comment14')->nullable();
            $table->text('distpast_comment15')->nullable();
            $table->text('distpast_comment16')->nullable();
            $table->text('distpast_comment17')->nullable();
            $table->text('distpast_comment18')->nullable();
            $table->text('distpast_comment19')->nullable();
            $table->text('distpast_comment20')->nullable();
            $table->integer('distpast_pastors')->nullable();
            $table->integer('distpast_elders')->nullable();
            $table->integer('distpast_deacons')->nullable();
            $table->integer('distpast_deaconesses')->nullable();
            $table->integer('distpast_adult_males')->nullable();
            $table->integer('distpast_adult_females')->nullable();
            $table->integer('distpast_children')->nullable();
            $table->integer('distpast_youth')->nullable();
            $table->integer('distpast_total_att')->nullable();
            $table->integer('distpast_tithe_payers')->nullable();
            $table->integer('distpast_active_tithe_payers')->nullable();
            $table->integer('distpast_officers_tithe_payers')->nullable();
            $table->decimal('distpast_tithes_paid')->nullable();
            $table->decimal('distpast_oferring')->nullable();
            $table->decimal('distpast_any_oferring')->nullable();
            $table->decimal('distpast_total_tithe_off')->nullable();
            $table->string('distpast_pastor')->nullable();
            $table->string('distpast_p_elder')->nullable();
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
        Schema::dropIfExists('district_pastor_reports');
    }
}
