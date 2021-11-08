<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVWAreaheadReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE OR REPLACE VIEW v_w_areahead_reports as
            SELECT area_head_id,
                areahead_district AS district,
                areahead_area AS area,
                areahead_local AS local,
                areahead_status AS status,
                areahead_comment1,
                areahead_comment2,
                areahead_comment3,
                areahead_comment4,
                areahead_comment5,
                areahead_comment6,
                areahead_question7 AS areahead_question7A,
                areahead_question8 AS areahead_question7B,
                areahead_question9 AS areahead_question7C,
                areahead_question10 AS areahead_question7D,
                areahead_question11 AS areahead_question7E,
                areahead_question12 AS areahead_question8,
                areahead_question13 AS areahead_question9,
                areahead_question14 AS areahead_question10,
                areahead_comment14 AS areahead_comment10,
                areahead_question15 AS areahead_question11,
                areahead_comment15 AS areahead_comment11,
                areahead_comment16 AS areahead_comment12,
                areahead_question17 AS areahead_question13,
                areahead_comment17 AS areahead_comment13,
                areahead_comment18 AS areahead_comment14,
                areahead_comment19 AS areahead_comment15,
                areahead_comment20 AS areahead_comment16,
                areahead_comment21 AS areahead_comment17,
                areahead_pastors,
                areahead_elders,
                areahead_deacons,
                areahead_deaconesses,
                areahead_adult_males,
                areahead_adult_females,
                areahead_children,
                areahead_youth,
                areahead_total_att,
                areahead_tithe_payers,
                areahead_active_tithe_payers,
                areahead_tithes_paid,
                areahead_oferring,
                areahead_any_oferring,
                areahead_total_tithe_off,
                areahead_apostle,
                areahead_pastor,
                get_user_name(updated_by) AS user_name,
                updated_at
            FROM area_head_reports
            WHERE deleted_at IS NULL;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP VIEW IF EXISTS v_w_areahead_reports');
    }
}
