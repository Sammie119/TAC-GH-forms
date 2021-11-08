<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVWMonitorReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE OR REPLACE VIEW v_w_monitor_reports as
            SELECT monitor_id,
            monirep_district AS district,
            monirep_area AS area,
            monirep_local AS local,
            monirep_status AS status,
            monirep_question1,
            monirep_comment1,
            monirep_question2,
            monirep_comment2,
            monirep_comment3,
            monirep_comment4,
            monirep_question5,
            monirep_comment5,
            monirep_question6,
            monirep_comment6,
            monirep_question7 AS monirep_question7a,
            monirep_question8 AS monirep_question7b,
            monirep_question9 AS monirep_question7c,
            monirep_question10 AS monirep_question7d,
            monirep_question11 AS monirep_question7e,
            monirep_question12 AS monirep_question8a,
            monirep_comment13 AS monirep_comment8b,
            monirep_comment14 AS monirep_comment9,
            monirep_pastors,
            monirep_elders,
            monirep_deacons,
            monirep_deaconesses,
            monirep_adult_males,
            monirep_adult_females,
            monirep_children,
            monirep_youth,
            monirep_total_att,
            monirep_tithe_payers,
            monirep_tithes_paid,
            monirep_oferring,
            monirep_total_tithe_off,
            get_user_name(updated_by) AS user_name,
            updated_at
        FROM monitor_reports
        WHERE deleted_at IS NULL;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP VIEW IF EXISTS v_w_monitor_reports');
    }
}
