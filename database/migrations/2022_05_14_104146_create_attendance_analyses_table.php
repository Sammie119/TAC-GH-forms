<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceAnalysesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_analyses', function (Blueprint $table) {
            $table->id('attendance_id');
            $table->string('attn_district')->nullable();
            $table->string('attn_area')->nullable();
            $table->string('attn_local')->nullable();
            $table->string('attn_status')->nullable();
            $table->string('attn_month', 20)->nullable();
            $table->unsignedTinyInteger('attn_year')->nullable();
            $table->unsignedInteger('pastors1')->nullable();
            $table->unsignedInteger('pastors2')->nullable();
            $table->unsignedInteger('pastors3')->nullable();
            $table->unsignedInteger('pastors4')->nullable();
            $table->unsignedInteger('pastors5')->nullable();
            $table->unsignedInteger('pastors_total')->nullable();
            $table->unsignedInteger('elders1')->nullable();
            $table->unsignedInteger('elders2')->nullable();
            $table->unsignedInteger('elders3')->nullable();
            $table->unsignedInteger('elders4')->nullable();
            $table->unsignedInteger('elders5')->nullable();
            $table->unsignedInteger('elders_total')->nullable();
            $table->unsignedInteger('deacons1')->nullable();
            $table->unsignedInteger('deacons2')->nullable();
            $table->unsignedInteger('deacons3')->nullable();
            $table->unsignedInteger('deacons4')->nullable();
            $table->unsignedInteger('deacons5')->nullable();
            $table->unsignedInteger('deacons_total')->nullable();
            $table->unsignedInteger('deaconesses1')->nullable();
            $table->unsignedInteger('deaconesses2')->nullable();
            $table->unsignedInteger('deaconesses3')->nullable();
            $table->unsignedInteger('deaconesses4')->nullable();
            $table->unsignedInteger('deaconesses5')->nullable();
            $table->unsignedInteger('deaconesses_total')->nullable();
            $table->unsignedInteger('adult_males1')->nullable();
            $table->unsignedInteger('adult_males2')->nullable();
            $table->unsignedInteger('adult_males3')->nullable();
            $table->unsignedInteger('adult_males4')->nullable();
            $table->unsignedInteger('adult_males5')->nullable();
            $table->unsignedInteger('adult_males_total')->nullable();
            $table->unsignedInteger('adult_females1')->nullable();
            $table->unsignedInteger('adult_females2')->nullable();
            $table->unsignedInteger('adult_females3')->nullable();
            $table->unsignedInteger('adult_females4')->nullable();
            $table->unsignedInteger('adult_females5')->nullable();
            $table->unsignedInteger('adult_females_total')->nullable();
            $table->unsignedInteger('children1')->nullable();
            $table->unsignedInteger('children2')->nullable();
            $table->unsignedInteger('children3')->nullable();
            $table->unsignedInteger('children4')->nullable();
            $table->unsignedInteger('children5')->nullable();
            $table->unsignedInteger('children_total')->nullable();
            $table->unsignedInteger('youth1')->nullable();
            $table->unsignedInteger('youth2')->nullable();
            $table->unsignedInteger('youth3')->nullable();
            $table->unsignedInteger('youth4')->nullable();
            $table->unsignedInteger('youth5')->nullable();
            $table->unsignedInteger('youth_total')->nullable();
            $table->unsignedInteger('total_att')->nullable();
            $table->unsignedDecimal('average_att')->nullable();
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
        Schema::dropIfExists('attendance_analyses');
    }
}
