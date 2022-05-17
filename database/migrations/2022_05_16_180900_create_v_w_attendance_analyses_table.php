<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVWAttendanceAnalysesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE OR REPLACE VIEW v_w_attendance_analyses as
                SELECT attendance_id,
                    attn_district AS district,
                    attn_area AS area,
                    attn_local AS local,
                    attn_status AS status,
                    attn_month,
                    attn_year,
                    pastors1,
                    pastors2,
                    pastors3,
                    pastors4,
                    pastors5,
                    pastors_total,
                    elders1,
                    elders2,
                    elders3,
                    elders4,
                    elders5,
                    elders_total,
                    deacons1,
                    deacons2,
                    deacons3,
                    deacons4,
                    deacons5,
                    deacons_total,
                    deaconesses1,
                    deaconesses2,
                    deaconesses3,
                    deaconesses4,
                    deaconesses5,
                    deaconesses_total,
                    adult_males1,
                    adult_males2,
                    adult_males3,
                    adult_males4,
                    adult_males5,
                    adult_males_total,
                    adult_females1,
                    adult_females2,
                    adult_females3,
                    adult_females4,
                    adult_females5,
                    adult_females_total,
                    children1,
                    children2,
                    children3,
                    children4,
                    children5,
                    children_total,
                    youth1,
                    youth2,
                    youth3,
                    youth4,
                    youth5,
                    youth_total,
                    total_att,
                    average_att,   
                    get_user_name(updated_by) AS user_name,
                    updated_at
                FROM attendance_analyses
                WHERE deleted_at IS NULL;
            ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP VIEW IF EXISTS v_w_attendance_analyses');
    }
}
