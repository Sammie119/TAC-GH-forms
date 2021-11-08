<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVWDistrictPastorReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE OR REPLACE VIEW v_w_district_pastor_reports as
            SELECT district_pastor_id,
            distpast_district AS district,
            distpast_area AS area,
            distpast_local AS local,
            distpast_status AS status,
            distpast_comment1,
            distpast_comment2,
            distpast_comment3,
            distpast_comment4,
            distpast_comment5,
            distpast_question6 AS distpast_question6a,
            distpast_question7 AS distpast_question6b,
            distpast_question8 AS distpast_question6c,
            distpast_question9 AS distpast_question6d,
            distpast_question10 AS distpast_question6e,
            distpast_question11 AS distpast_question7,
            distpast_question12 AS distpast_question8,
            distpast_question13 AS distpast_question9,
            distpast_comment13 AS distpast_comment9,
            distpast_comment14 AS distpast_comment10,
            distpast_comment15 AS distpast_comment11,
            distpast_comment16 AS distpast_comment12,
            distpast_comment17 AS distpast_comment13,
            distpast_comment18 AS distpast_comment14,
            distpast_comment19 AS distpast_comment15,
            distpast_comment20 AS distpast_comment16,
            distpast_pastors,
            distpast_elders,
            distpast_deacons,
            distpast_deaconesses,
            distpast_adult_males,
            distpast_adult_females,
            distpast_children,
            distpast_youth,
            distpast_total_att,
            distpast_tithe_payers,
            distpast_active_tithe_payers,
            distpast_officers_tithe_payers,
            distpast_tithes_paid,
            distpast_oferring,
            distpast_any_oferring,
            distpast_total_tithe_off,
            distpast_pastor,
            distpast_p_elder,
            get_user_name(updated_by) AS user_name,
            updated_at
        FROM district_pastor_reports
        WHERE deleted_at IS NULL;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP VIEW IF EXISTS v_w_district_pastor_reports');
    }
}
