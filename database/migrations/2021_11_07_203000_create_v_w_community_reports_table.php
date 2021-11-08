<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVWCommunityReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE OR REPLACE VIEW v_w_community_reports as
            SELECT community_id,
                commrep_district AS district,
                commrep_area AS area,
                commrep_local AS local,
                commrep_status AS status,
                commrep_comment1,
                commrep_comment2,
                commrep_question3,
                commrep_comment3,
                commrep_question4,
                commrep_comment4,
                commrep_question5,
                commrep_comment5,
                commrep_question6,
                commrep_comment6,
                commrep_question7,
                commrep_comment7,
                commrep_question8,
                commrep_comment8,
                commrep_question9,
                commrep_comment9,
                commrep_question10,
                commrep_comment10,
                commrep_question11,
                commrep_comment11,
                get_user_name(updated_by) AS user_name,
                updated_at
            FROM community_reports
            WHERE deleted_at IS NULL;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP VIEW IF EXISTS v_w_community_reports'); 
    }
}
