<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVWDistrictLevelMonotersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE OR REPLACE VIEW v_w_district_level_monoters as
            SELECT district_level_id,
            dlm_district AS district,
            dlm_area AS area,
            dlm_local AS local,
            dlm_status AS status,
            dlm_question1,
            dlm_comment1,
            dlm_question2,
            dlm_comment2,
            dlm_question3,
            dlm_comment3,
            dlm_question4,
            dlm_comment4,
            dlm_question5,
            dlm_comment5,
            dlm_question6,
            dlm_comment6,
            dlm_question7,
            dlm_comment7,
            dlm_question8,
            dlm_comment8,
            dlm_question9,
            dlm_comment9,
            dlm_question10,
            dlm_comment10,
            dlm_question11,
            dlm_comment11,
            dlm_question12,
            dlm_comment12,
            get_user_name(updated_by) AS user_name,
            updated_at
        FROM district_level_monoters
        WHERE deleted_at IS NULL;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP VIEW IF EXISTS v_w_district_level_monoters');
    }
}
