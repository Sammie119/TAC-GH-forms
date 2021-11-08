<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVWMemberReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE OR REPLACE VIEW v_w_member_reports as
            SELECT member_id,
            member_district AS district,
            member_area AS area,
            member_local AS local,
            member_status AS status,
            member_question1,
            member_comment1,
            member_question2,
            member_comment2,
            member_question3,
            member_comment3,
            member_question4,
            member_comment4,
            member_question5,
            member_comment5,
            member_question6,
            member_comment6,
            member_question7,
            member_comment7,
            member_question8,
            member_comment8,
            member_question9,
            member_comment9,
            member_question10,
            member_comment10,
            member_question11,
            member_comment11,
            member_question12,
            member_comment12,
            member_question13,
            member_comment13,
            member_question14,
            member_comment14,
            member_question15,
            member_comment15,
            get_user_name(updated_by) AS user_name,
            updated_at
        FROM member_reports
        WHERE deleted_at IS NULL;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP VIEW IF EXISTS v_w_member_reports');
    }
}
